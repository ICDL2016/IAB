var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;

function onYouTubeIframeAPIReady() {
    player1 = new YT.Player('divPlayer1', {
        height: '500',
        width: '100%',
        videoId: 'd8Oc90QevaI',
    });
}

function play1(event) {
    event.target.style.display = 'none';
    $('#divPlayer1').show();
    player1.playVideo();
}

$('.directions-block').on('click', function () {
    let programsWrap = document.querySelectorAll('.programs-wrap');
    $('.programs-wrap[data-program='+ $(this).attr('data-program') +']').slideToggle(200);
    for (let i=0; i<programsWrap.length; i++) {
        if (programsWrap[i].getAttribute('data-program') !== $(this).attr('data-program')) {
            programsWrap[i].style.display = 'none';
        }
    }
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