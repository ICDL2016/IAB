<?php require_once '_header.php' ?>

    <section class="video proforient-video">
        <div class="container video-wrapper proforient-video__wrapper">
            <div class="video-play" onclick="play1(event)">
                <?php require_once 'img/video/play.svg'; ?>
            </div>
        </div>
        <div id="divPlayer1"></div>
    </section>

    <section class="choose proforient-choose">
        <div class="choose-bg proforient-choose__bg">
            <img src="img/about-page/aboutUs-choose.png" alt="aboutUs">
        </div>

        <div class="choose-wrapper proforient-choose__wrapper">
            <div class="container">

                <h2 class="proforient-title title">ПРОФОРИЕНТАЦИЯ</h2>

                <div class="proforient-text">
                    <div class="proforient-img">
                        <img src="img/proforient/proforient-img.png" alt="img">
                    </div>
                    <div class="proforient-descr">
                        Пройдите тест на профориентацию прямо сейчас
                    </div>
                </div>

                <div class="proforient-btn btn">
                    <img src="img/certificate/border-left.png" alt="border" class="cert-border cert-border__left">
                    <img src="img/certificate/border-right.png" alt="border" class="cert-border cert-border__right">

                    <img src="img/big-star.png" alt="star" class="btn-star">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    <div class="btn-text">
                        <span>НАЧАТЬ ТЕСТ</span>
                    </div>
                    <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                </div>



            </div>
        </div>
    </section>

    <div class="margin-helper"></div>

    <section class="proforient-about">
        <div class="container">
            <div class="title about-title">
                Пройди обучение в Международной Академии
                <span>Бизнеса получи престижный диплом и стань</span>
                <span>высокооплачиваемым специалистом в интересной</span>
                тебе сфере деятельности
            </div>

            <div class="about-block">
                <div class="about-icon">
                    <img src="img/proforient/yellow-star.png" alt="star">
                </div>
                <div class="about-descr">Этот содержательный курс даст вам именно те знания которые вы ищите. Пройдите
                    в Новом Бизнес Университете получите престижный диплом и станьте
                    высокооплачиваемым специалистом в интересной Вам сфере деятельности.</div>
            </div>
            <div class="about-block">
                <div class="about-icon">
                    <img src="img/proforient/yellow-star.png" alt="star">
                </div>
                <div class="about-descr">Этот содержательный курс даст вам именно те знания которые вы ищите. Пройдите
                    в Новом Бизнес Университете получите престижный диплом и станьте
                    высокооплачиваемым специалистом в интересной Вам сфере деятельности.</div>
            </div>

            <div class="about-img">
                <a href="img/about/about1.jpg" class="fancybox-buttons" data-fancybox="gallery">
                    <img src="img/about/about1.jpg" alt="photo">
                </a>
                <a href="img/about/about2.jpg" class="fancybox-buttons" data-fancybox="gallery">
                    <img src="img/about/about2.jpg" alt="photo">
                </a>
                <a href="img/about/about3.jpg" class="fancybox-buttons" data-fancybox="gallery">
                    <img src="img/about/about3.jpg" alt="photo">
                </a>
            </div>

            <div class="about-block">
                <div class="about-icon">
                    <img src="img/proforient/yellow-star.png" alt="star">
                </div>
                <div class="about-descr">Этот содержательный курс даст вам именно те знания которые вы ищите. Пройдите
                    в Новом Бизнес Университете получите престижный диплом и станьте
                    высокооплачиваемым специалистом в интересной Вам сфере деятельности.</div>
            </div>
        </div>
    </section>

<?php require_once '_advantages.php'; ?>
    <section class="aboutUs-diploma">
        <?php require_once '_diploma.php'; ?>
    </section>
<?php require_once '_reviews.php'; ?>
<?php require_once '_steps.php'; ?>

    <section class="aboutUs-success">
        <?php require_once '_success.php'; ?>
    </section>

    <section class="proforient-whyChoose">
        <?php require_once '_why-choose.php'; ?>
    </section>

<?php require_once '_clients.php'; ?>
<?php require_once '_faq.php'; ?>

    <section class="start proforient-start">
        <div class="container">
            <div class="start-block">

                <div class="start-left">
                    <div class="start-icon">
                        <img src="img/start/home.svg" alt="home">
                    </div>

                    <h2 class="start-title">Пройди тест
                        <span>на профориентацию</span>
                    прямо сейчас</h2>

                    <div class="proforient-btn btn">
                        <img src="img/big-star.png" alt="star" class="btn-star">
                        <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                        <div class="btn-text">
                            <span>НАЧАТЬ ТЕСТ</span>
                        </div>
                        <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                        <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    </div>
                </div>


                <div class="start-img">
                    <img src="img/proforient/proforient-man.png" alt="man">
                </div>
            </div>
        </div>
    </section>

<?php require_once '_footer.php' ?>
<?php require_once '_scripts.php' ?>
    <script>
        //video
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player1;

        function onYouTubeIframeAPIReady() {

            if ($(window).width() < 576) {
                player1 = new YT.Player('divPlayer1', {
                    height: '350',
                    width: '100%',
                    videoId: 'd8Oc90QevaI',
                });
            } else if ($(window).width() < 768) {
                player1 = new YT.Player('divPlayer1', {
                    height: '400',
                    width: '100%',
                    videoId: 'd8Oc90QevaI',
                });
            } else if ($(window).width() < 992) {
                player1 = new YT.Player('divPlayer1', {
                    height: '400',
                    width: '100%',
                    videoId: 'd8Oc90QevaI',
                });
            } else {
                player1 = new YT.Player('divPlayer1', {
                    height: '510',
                    width: '100%',
                    videoId: 'd8Oc90QevaI',
                });
            }

        }

        function play1(event) {
            $('.video-wrapper').hide();
            $('.video').css('background', 'none');
            $('.choose-bg').css('z-index', '-1');
            $('.choose-wrapper').css('top', '-20px');
            $('.proforient-choose').css('height', 'auto');
            $('.margin-helper').css('margin-top', '0');
            $('#divPlayer1').show();
            $('iframe').css('display', 'block');
            player1.playVideo();
        }

        //popup form
        $('.cert-btn').click(function () {
            $('.overlay, .cert-popup').fadeIn();
            $('body').css('overflow', 'hidden');
        });
        $('.popup-close, .overlay').click(function () {
            $('.overlay, .cert-popup').fadeOut();
            $('body').css('overflow-y', 'visible');
        });

    </script>
<?php require_once '_end.php' ?>