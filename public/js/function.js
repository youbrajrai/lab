jQuery(document).ready(function () {
    var select = jQuery(".select");
    var steps = jQuery(".step");

    select.bind("click", function () {
        jQuery.each(steps, function (i) {
            if (jQuery(this).hasClass('current')) {
                jQuery(this).removeClass('current');
                return false;
            }
        })
        jQuery(this).addClass('current');
    });
})