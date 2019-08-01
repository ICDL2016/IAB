var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;

function onYouTubeIframeAPIReady() {

    if($(window).width() < 451) {
        player1 = new YT.Player('divPlayer1', {
            height: '200',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else if($(window).width() < 992) {
        player1 = new YT.Player('divPlayer1', {
            height: '300',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else {
        player1 = new YT.Player('divPlayer1', {
            height: '400',
            width: '80%',
            videoId: 'd8Oc90QevaI',
        });
    }

}

function play1(event) {
    event.target.style.display = 'none';
    $('#divPlayer1').show();
    $('iframe').css('display', 'block');
    player1.playVideo();
}

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

// блоки каталогов
let catBlock = document.querySelectorAll('.catalog-block');
for (let i=0; i<catBlock.length; i++) {
    catBlock[i].addEventListener('click', function () {

        $('.catalog-option[data-catalog!='+ $(this).attr('data-catalog') +']').hide();
        $('.catalog-block[data-catalog!='+ $(this).attr('data-catalog') +']').removeClass('red-catalog').addClass('margin-helper');

        let directionsTop = document.querySelector('.directions-blocks').getBoundingClientRect().top;
        let blockTop =  this.getBoundingClientRect().top;
        let marginFromTop = blockTop - directionsTop;

        this.classList.toggle('red-catalog');
        this.classList.toggle('margin-helper');

        $('.catalog-option[data-catalog='+ $(this).attr('data-catalog') +']').css('top', +marginFromTop + 45 + 'px').toggle();
        let blockHeight = $('.catalog-option[data-catalog='+ $(this).attr('data-catalog') +']').height();
        this.style.marginBottom = blockHeight+'px';
    });
}

//модалка
$('.course-program__block').on('click', function () {
    $('.overlay').show();
    $('.course-modal').fadeIn();
    $('body').css('overflow', 'hidden');
});

$('.overlay, .modal-close').on('click', function () {
    $('.overlay').fadeOut();
    $('.course-modal').fadeOut();
    $('body').css('overflow', 'visible');
});


// псевдовалидация

let emptyTop = false;
let emptyBottom = false;
$('.form-input__name').on('click', function () {
    emptyTop = true;
    if (emptyBottom === true && ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1)) {
        $(this).parent().children('.form-input__span-email').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-name').hide();
});

$('.form-input__email').on('click', function () {
    emptyBottom = true;
    if (emptyTop === true && $(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-email').hide();
});

$('.form-bottom').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-body').children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-body').children('.form-input__span-name').show();
        send = false;
    }

    if ($(this).parent().children('.form-body').children('.form-input__email').val().length === 0 || $(this).parent().children('.form-body').children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-body').children('.form-input__span-email').show();
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

$('.login-submit').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-body').children('.form-input__password').val().length === 0) {
        $(this).parent().children('.form-body').children('.form-input__span-password').show();
        send = false;
    }

    if ($(this).parent().children('.form-body').children('.form-input__email').val().length === 0 || $(this).parent().children('.form-body').children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-body').children('.form-input__span-email').show();
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

$('.remind-submit').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-body').children('.form-input__email').val().length === 0 || $(this).parent().children('.form-body').children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-body').children('.form-input__span-email').show();
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

// слайдер

$('.fancybox-buttons').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',

    prevEffect : 'none',
    nextEffect : 'none',

    closeBtn  : false,

    helpers : {
        title : '',
        buttons	: {}
    },

    afterLoad : function() {
        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
    }
});