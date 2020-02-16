$(document).ready(function () {

    $('.header-burger').click(function () {
        $(this).children('.header-menu').slideToggle();
    });

    $('.reviews-slider, .success-slider').owlCarousel({
        items: 1,
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left reviews-arrow reviews-arrow__left'>",
            "<i class='fa fa-angle-right reviews-arrow reviews-arrow__right'>"],
    });

    $('.clients-slider').owlCarousel({
        items: 6,
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left clients-arrow clients-arrow__left'>",
            "<i class='fa fa-angle-right clients-arrow clients-arrow__right'>"],
        responsive: {
            1: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 6,
            }
        }
    });

    $('.faq-q').click(function () {
       $(this).toggleClass('faq-q__active');
       $(this).next('.faq-answer').slideToggle();
       $(this).children('i').toggleClass('fa-angle-down').toggleClass('fa-angle-right');
    });
});