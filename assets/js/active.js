(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        $('.welcome-slider').owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            autoplay: false,
        });
        $('.works-gallery').masonry({
            gutter: 15,
            horizontalOrder: true,
        });

        $('.count').counterUp({
            delay: 10,
            time: 1000
        });

    });


    jQuery(window).on("load", function () {
        //jQuery(".works-list").isotope();
    });

})(jQuery);