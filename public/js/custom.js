$(document).ready(function() {
    $('.slider').slick({
        prevArrow: '.arrow_prev',
        nextArrow: '.arrow_next',
        autoplay: true,
        autoplaySpeed: 2500,
    });

    $('.categories_slider').slick({
        prevArrow: '.arrow_prev_categories',
        nextArrow: '.arrow_next_categories',
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [{
                breakpoint: 1024, // 800x600
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 800, // 768x1024
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768, // 600x800
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600, // 480x320
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480, // 320x480
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});