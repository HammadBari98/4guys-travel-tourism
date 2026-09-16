/**
 * Tour-detail / tour-card action buttons: Compare, Wishlist, Share.
 *
 * The markup carries data-url (POST toggle route) + data-tour-id but had no JS.
 * - Compare  : cookie-based toggle (no login) -> toggles active state.
 * - Wishlist : customer-only toggle -> toggles the heart (error -> message).
 * - Share    : toggles the social-share dropdown.
 */
(function () {
    'use strict';

    // Translatable UI strings come from window.siteConfig.messages (set in base layout
    // via @json(__())). English fallbacks only apply if siteConfig failed to load.
    var MESSAGES = (window.siteConfig && window.siteConfig.messages) || {};

    function csrfToken() {
        var meta = document.querySelector('meta[name="csrf-token"]');
        return meta ? meta.getAttribute('content') : '';
    }

    // Show a toast via the theme's notification API (Theme::registerToastNotification()
    // loads toast.js, exposing window.Theme.showSuccess / showError). Fall back to the
    // admin Botble.* API, then alert(), so a message is never silently dropped.
    function notify(isError, message) {
        if (!message) {
            return;
        }
        if (window.Theme && typeof window.Theme.showError === 'function' && typeof window.Theme.showSuccess === 'function') {
            isError ? window.Theme.showError(message) : window.Theme.showSuccess(message);
        } else if (window.Botble && typeof window.Botble.showError === 'function' && typeof window.Botble.showSuccess === 'function') {
            isError ? window.Botble.showError(message) : window.Botble.showSuccess(message);
        }
    }

    function toggleRequest(url, tourId, onSuccess) {
        fetch(url, {
            method: 'POST',
            credentials: 'same-origin',
            headers: {
                'X-CSRF-TOKEN': csrfToken(),
                'X-Requested-With': 'XMLHttpRequest',
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ tour_id: tourId }),
        })
            .then(function (res) {
                return res.json().then(function (data) {
                    return { ok: res.ok, data: data || {} };
                });
            })
            .then(function (result) {
                if (result.ok && !result.data.error) {
                    onSuccess(result.data);
                    notify(false, result.data.message);
                } else {
                    notify(true, result.data.message || MESSAGES.signInRequired || 'Please sign in to continue.');
                }
            })
            .catch(function () {
                notify(true, MESSAGES.genericError || 'Something went wrong, please try again.');
            });
    }

    function bindToggle(selector) {
        document.querySelectorAll(selector).forEach(function (el) {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                var url = el.getAttribute('data-url');
                var tourId = el.getAttribute('data-tour-id');
                if (!url || !tourId || el.dataset.loading) {
                    return;
                }
                el.dataset.loading = '1';
                toggleRequest(url, tourId, function () {
                    el.classList.toggle('active');
                });
                setTimeout(function () { delete el.dataset.loading; }, 600);
            });
        });
    }

    function init() {
        bindToggle('.js-toggle-compare');
        bindToggle('.js-add-to-wishlist');

        // Share dropdown toggle
        document.querySelectorAll('.js-toggle-share').forEach(function (el) {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var wrap = el.closest('.tour-detail-share');
                var dd = wrap ? wrap.querySelector('.share-dropdown') : null;
                if (dd) {
                    var hidden = dd.style.display === 'none' || dd.style.display === '';
                    dd.style.display = hidden ? 'block' : 'none';
                }
            });
        });

        // Close any open share dropdown on outside click
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.tour-detail-share')) {
                document.querySelectorAll('.share-dropdown').forEach(function (dd) {
                    dd.style.display = 'none';
                });
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
