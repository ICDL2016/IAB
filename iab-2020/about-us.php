<?php require_once '_header.php'; ?>

    <section class="video aboutUs-video">
        <div class="container video-wrapper">
            <div class="video-play" onclick="play1(event)">
                <?php require_once 'img/video/play.svg'; ?>
            </div>
        </div>
        <div id="divPlayer1"></div>
    </section>

    <section class="choose aboutUs-choose">
        <div class="choose-bg aboutUs-choose__bg">
            <img src="img/about-page/aboutUs-choose.png" alt="aboutUs">
        </div>

        <div class="choose-wrapper aboutUs-choose__wrapper">
            <h2 class="title advantages-title">МЕЖДУНАРОДНАЯ
                <span>АКАДЕМИЯ БИЗНЕСА</span></h2>

            <div class="container">
                <div class="advantages-blocks">
                    <div class="advantages-block">
                        <div class="advantages-info">
                            <div class="advantages-text">Более</div>
                            <div class="advantages-number">390</div>
                            <div class="advantages-text">дистанционных
                                курсов обучения
                            </div>
                        </div>
                    </div>
                    <div class="advantages-block">
                        <div class="advantages-info">
                            <div class="advantages-text">Обучение из любой
                                точки мира на
                            </div>
                            <div class="advantages-number">20</div>
                            <div class="advantages-text">языках</div>
                        </div>
                    </div>
                    <div class="advantages-block">
                        <div class="advantages-info">
                            <div class="advantages-text">Более</div>
                            <div class="advantages-number">3000</div>
                            <div class="advantages-text">экспертов по всему
                                миру
                            </div>
                        </div>
                    </div>
                    <div class="advantages-block">
                        <div class="advantages-info">
                            <div class="advantages-text">Перспективное
                                обучение с
                            </div>
                            <div class="advantages-number">2001</div>
                            <div class="advantages-text">года</div>
                        </div>
                    </div>
                    <div class="advantages-block">
                        <div class="advantages-info">
                            <div class="advantages-text">Более</div>
                            <div class="advantages-number">35000</div>
                            <div class="advantages-text">выпускников</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="aboutUs-margin"></div>

    <section class="aboutUs-whyChoose whyChoose">
        <?php require_once '_why-choose.php'; ?>
    </section>

<?php require_once '_clients.php'; ?>

    <section class="about">
        <?php require_once '_about.php'; ?>
    </section>
<?php require_once '_reviews.php'; ?>
<?php require_once '_steps.php'; ?>

    <section class="aboutUs-success">
        <?php require_once '_success.php'; ?>
    </section>

    <section class="aboutUs-diploma">
        <?php require_once '_diploma.php'; ?>
    </section>

<?php require_once '_faq.php'; ?>
<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
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

        let margin = 0;

        function marginF() {
            if ($(window).width() < 576) {
                margin = '160px'
            } else if ($(window).width() < 768) {
                margin = '360px'
            } else if ($(window).width() < 992) {
                margin = '160px'
            }
        }

        marginF();

        window.onresize = function () {
            marginF();
        };

        function play1(event) {
            $('.video-wrapper').hide();
            $('.video').css('background', 'none');
            $('.choose-bg').css('z-index', '-1');
            $('.choose-wrapper').css('top', '-20px');
            $('.aboutUs-margin').css('margin-top', margin);
            $('#divPlayer1').show();
            $('iframe').css('display', 'block');
            player1.playVideo();
        }
    </script>
<?php require_once '_end.php'; ?>