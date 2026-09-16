/**
 * Tour filter panel — "Show more / Show less" toggle that reveals the extra
 * filter options (.filter-options-extra) within each filter widget.
 */
(function () {
    'use strict';

    function init() {
        document.querySelectorAll('.filter-toggle-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var widget = btn.closest('.filter-widget') || btn.parentElement;
                var extra = widget ? widget.querySelector('.filter-options-extra') : null;

                if (!extra) {
                    return;
                }

                var isHidden = extra.style.display === 'none' || extra.style.display === '';
                extra.style.display = isHidden ? 'block' : 'none';

                var more = btn.querySelector('.show-more-text');
                var less = btn.querySelector('.show-less-text');
                if (more) {
                    more.classList.toggle('d-none', isHidden);
                }
                if (less) {
                    less.classList.toggle('d-none', !isHidden);
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
