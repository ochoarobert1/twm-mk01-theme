jQuery(document).ready(function ($) {
    "use strict";
    jQuery("body").niceScroll();

    /* OWL CAROUSEL */
    jQuery('.slider-container').owlCarousel({
        items: 6,
        margin: 30,
        loop: false,
        dots: false,
        nav: true,
        center: true,
        autoplay: true,
        startPosition: 1
    });

});
