/**
 * Robust number counter animation for .counter elements.
 *
 * Replaces the fragile counterUp + Waypoints trigger (which can fail to fire
 * when Botble lazy-load / AOS shifts layout after the waypoint offsets are
 * registered). Uses IntersectionObserver so each counter animates 0 -> target
 * exactly once when it scrolls into view. Preserves decimals and thousands
 * separators; the suffix (<b>K+</b>, <b>%</b> ...) lives in a sibling element
 * so it stays untouched.
 */
(function () {
    'use strict';

    function animateCounter(el) {
        var raw = (el.textContent || '').trim();
        var hasComma = /,/.test(raw);
        var target = parseFloat(raw.replace(/,/g, ''));

        if (isNaN(target)) {
            return;
        }

        var decimals = (raw.split('.')[1] || '').length;
        var duration = 2000;
        var startTime = null;

        function format(value) {
            var out = decimals ? value.toFixed(decimals) : String(Math.round(value));
            if (hasComma) {
                var parts = out.split('.');
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                out = parts.join('.');
            }
            return out;
        }

        function step(timestamp) {
            if (startTime === null) {
                startTime = timestamp;
            }
            var progress = Math.min((timestamp - startTime) / duration, 1);
            // easeOutQuad for a natural deceleration
            var eased = 1 - (1 - progress) * (1 - progress);
            el.textContent = format(target * eased);

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = format(target);
            }
        }

        el.textContent = format(0);
        requestAnimationFrame(step);
    }

    function init() {
        var counters = document.querySelectorAll('.counter');

        if (!counters.length) {
            return;
        }

        if (!('IntersectionObserver' in window)) {
            // Fallback: animate all immediately.
            counters.forEach(animateCounter);
            return;
        }

        var observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !entry.target.dataset.counted) {
                    entry.target.dataset.counted = '1';
                    animateCounter(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(function (counter) {
            observer.observe(counter);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
