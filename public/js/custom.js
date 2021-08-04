$(document).ready(function () {
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
        slidesToScroll: 1
    });
});
