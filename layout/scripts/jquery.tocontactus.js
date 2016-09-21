
jQuery("#tocontactus").click(function () {
    jQuery("body,html").animate({
        scrollTop: $("#contact_us").offset().top
    }, 1500);
});