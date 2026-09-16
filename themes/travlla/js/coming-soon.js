/**
 * Coming-soon countdown. Target date is provided as config via
 * window.comingSoonTarget (set inline in the layout). Logic lives here so the
 * layout carries no inline script, and the interval is cleared on unload.
 */
(function () {
    'use strict';

    var els = {
        days: document.getElementById('days'),
        hours: document.getElementById('hours'),
        minutes: document.getElementById('minutes'),
        seconds: document.getElementById('seconds'),
    };

    if (!els.days) {
        return;
    }

    var target = new Date(window.comingSoonTarget || '').getTime();
    var timer = null;

    var pad = function (n) {
        return n < 10 ? '0' + n : n;
    };

    var tick = function () {
        var diff = Math.max(0, (target - new Date().getTime()) / 1000);
        els.days.innerHTML = pad(Math.floor(diff / 86400));
        els.hours.innerHTML = pad(Math.floor(diff / 3600) % 24);
        els.minutes.innerHTML = pad(Math.floor(diff / 60) % 60);
        els.seconds.innerHTML = pad(Math.floor(diff % 60));
    };

    tick();
    timer = setInterval(tick, 1000);

    window.addEventListener('beforeunload', function () {
        if (timer) {
            clearInterval(timer);
            timer = null;
        }
    });
})();
