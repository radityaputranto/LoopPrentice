
$(document).ready(function() {

    $('#owl-banner').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav:false,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-video').owlCarousel({
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        merge: true,
        loop: true,
        margin: 0,
        video: true,
        lazyLoad: true,
        autoHeight:true,
        center: true,
        responsive: {
            480: {
                items: 2
            },
            600: {
                items: 4
            }
        }
    });
    $('#owl-regional').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    $('#owl-bali_nusra').owlCarousel({
        autoHeight:true,
        center: true,
        items:1,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        loop:true,
        margin:10,
        responsive:{
            1000:{
                items:8
            },
            800:{
                items:6
            },
            500:{
                items:4
            }
        }
    });
    $('#owl-jateng_diy').owlCarousel({
        autoHeight:true,
        center: true,
        items:1,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        loop:true,
        margin:10,
        responsive:{
            1000:{
                items:8
            },
            800:{
                items:6
            },
            500:{
                items:4
            }
        }
    });
    $('#owl-jatim').owlCarousel({
        autoHeight:true,
        center: true,
        items:1,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        loop:true,
        margin:10,
        responsive:{
            1000:{
                items:8
            },
            800:{
                items:6
            },
            500:{
                items:4
            }
        }
    });
})