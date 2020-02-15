$(document).ready(function () {

    $('.header-burger').click(function () {
        $('.header-menu').slideToggle();
    });

    $('.reviews-slider, .success-slider, .clients-slider').owlCarousel({
        items: 1,
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left reviews-arrow reviews-arrow__left'>",
            "<i class='fa fa-angle-right reviews-arrow reviews-arrow__right'>"],
    });

    $('.faq-q').click(function () {
       $(this).toggleClass('faq-q__active');
       $(this).next('.faq-answer').slideToggle();
       $(this).children('i').toggleClass('fa-angle-down').toggleClass('fa-angle-right');
    });
});