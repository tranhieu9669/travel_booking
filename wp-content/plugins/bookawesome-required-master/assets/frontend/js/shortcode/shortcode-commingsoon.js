(function($) {
"use strict";

    var nextYear = new Date(new Date().getFullYear() + 1, 1 - 1, 26);
    $('#countdown').countdown(nextYear, function(event) {
        var $this = $(this).html(event.strftime(''
        + '<div class="item"><span class="count">%D</span><span>Days</span></div>'
        + '<div class="item"><span class="count">%H</span><span>Hours</span></div>'
        + '<div class="item"><span class="count">%M</span><span>Minutes</span></div>'
        + '<div class="item"><span class="count">%S</span><span>Seconds</span></div>'));
    });

})(jQuery);