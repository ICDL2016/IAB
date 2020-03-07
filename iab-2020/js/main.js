$(document).ready(function () {

    $('.header-burger i').click(function (e) {
        $(this).next('.header-menu').slideToggle();
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

    $('.experts-slider').owlCarousel({
        items: 5,
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left experts-arrow experts-arrow__left'>",
            "<i class='fa fa-angle-right experts-arrow experts-arrow__right'>"],
        responsive: {
            1: {
                items: 1,
            },
            425: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            }
        }
    });

    //faq
    $('.faq-q').click(function () {
       $(this).toggleClass('faq-q__active');
       $(this).next('.faq-answer').slideToggle();
       $(this).children('i').toggleClass('fa-angle-down').toggleClass('fa-angle-right');
    });

    // блоки
    let directionsBlock = document.querySelectorAll('.directions-block');
    for (let i=0; i<directionsBlock.length; i++) {
        directionsBlock[i].addEventListener('click', function () {

            $('.programs-wrap[data-program!='+ $(this).attr('data-program') +']').hide();
            $('.directions-block[data-program!='+ $(this).attr('data-program') +']').removeClass('red').addClass('margin-helper');

            let directionsTop = document.querySelector('.directions-blocks').getBoundingClientRect().top;
            let blockTop =  this.getBoundingClientRect().top;
            let marginFromTop = blockTop - directionsTop;
            this.classList.toggle('red');
            this.classList.toggle('margin-helper');

            $('.programs-wrap[data-program='+ $(this).attr('data-program') +']').css('top', +marginFromTop + 45 + 'px').toggle();
            let blockHeight = $('.programs-wrap[data-program='+ $(this).attr('data-program') +']').height();
            this.style.marginBottom = blockHeight+'px';

        });
    }

    // ресайзы экрана
    window.onresize = function() {
        let programsWrap = document.querySelectorAll('.programs-wrap');
        let directionsBlock = document.querySelectorAll('.directions-block');
        for (let i=0; i<programsWrap.length; i++) {
            if (+programsWrap[i].style.top.replace('px', '') > 0) {
                let directionsTop = document.querySelector('.directions-blocks').getBoundingClientRect().top;
                let blockTop =  directionsBlock[i].getBoundingClientRect().top;
                let marginFromTop = blockTop - directionsTop;
                programsWrap[i].style.top = +marginFromTop + 45 + 'px';
                directionsBlock[i].style.marginBottom = getComputedStyle(programsWrap[i]).height;
                break;
            }
        }
    };


    //popup form
    $('.popup-btn').click(function () {
        $('.overlay, .popup').fadeIn();
        $('body').css('overflow', 'hidden');
    });
    $('.popup-close, .overlay').click(function () {
        $('.overlay, .popup, .popup-course').fadeOut();
        $('body').css('overflow-y', 'visible');
    });

    //popup course form
    $('.programs-block, .offer-block').click(function () {
        $('.overlay, .popup-course').fadeIn();
        $('body').css('overflow', 'hidden');
    });

    // псевдовалидация попап
    let emptyTop2 = false;
    let emptyBottom2 = false;
    $('.popup-form__email').on('click', function () {
        emptyTop2 = true;
        if (emptyBottom2 === true && ($(this).parent().children('.popup-form__email').val().length === 0 || $(this).parent().children('.popup-form__email').val().indexOf('@') === -1)) {
            $(this).parent().children('.form-input__span-email').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-email').hide();
        $(this).parent().children('.popup-form__email').removeClass('border-red');
    });

    $('.popup-form__name').on('click', function () {
        emptyBottom2 = true;
        if (emptyTop2 === true && $(this).parent().children('.popup-form__name').val().length === 0) {
            $(this).parent().children('.form-input__span-name').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-name').hide();
        $(this).parent().children('.popup-form__name').removeClass('border-red');
    });

    $('.popup-form__btn').on('click', function () {
        event.preventDefault();
        let send = true;

        if ($(this).parent().children('.popup-form__name').val().length === 0) {
            $(this).parent().children('.form-input__span-name').show();
            $(this).parent().children('.popup-form__name').addClass('border-red');
            send = false;
        }

        if ($(this).parent().children('.popup-form__email').val().length === 0 || $(this).parent().children('.popup-form__email').val().indexOf('@') === -1) {
            $(this).parent().children('.form-input__span-email').show();
            $(this).parent().children('.popup-form__email').addClass('border-red');
            send = false;
        }

        if (send === true) {
            $(this).parent().submit();
        }
    });

    //курсы
    if($('.offer-blocks').length) {
        let current = 8;
        let all = $('.offer-block').length;
        if (current < all) {
            $('.offer-current').html(current);
            $('.offer-all').html(all);
            $('.offer-block').hide().slice(0,current).fadeIn();
            $('.offer-more').click(function (e) {
                e.preventDefault();
                current += 6;
                if (current >= all) {
                    $('.offer-more').hide();
                }
                $('.offer-block').hide().slice(0,current).fadeIn();
                $('.offer-current').html(current);
            });
        } else {
            $('.offer-more').hide();
        }
    }
});
