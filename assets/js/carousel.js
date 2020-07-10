$(document).ready(function() {
    $('.owl-carousel.journals').owlCarousel({
        autoplay: false,
        loop: true,
        margin: 15,
        stagePadding: 10,
        nav: true,
        navText : ["<div class='pop-prev'><i class='fa fa-chevron-left'></i></div>",
                    "<div class='pop-next'><i class='fas fa-chevron-right'></i></div>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            375:{
                items: 2
            },
            768: {
                items: 4
            }
        }
    });
    $('.owl-carousel.indexeds').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        margin: 50,
        smartSpeed: 500,
        nav: true,
        navText : ["<div class='indexeds-prev'><i class='fa fa-chevron-left'></i></div>",
                    "<div class='indexeds-next'><i class='fas fa-chevron-right'></i></div>"],
        dots: false,
        responsive: {
            0: {
                margin: 25,
                items: 1
            },
            425: {
                items: 2
            },
            768: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });
});