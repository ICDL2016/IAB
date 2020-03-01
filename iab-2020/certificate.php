<?php require_once '_header.php' ?>

    <section class="video cert-video">
        <div class="container video-wrapper">
            <div class="video-play" onclick="play1(event)">
                <?php require_once 'img/video/play.svg'; ?>
            </div>
        </div>
        <div id="divPlayer1"></div>
    </section>

    <section class="choose cert-choose">
        <div class="choose-bg cert-choose__bg">
            <img src="img/about-page/aboutUs-choose.png" alt="aboutUs">
        </div>

        <div class="choose-wrapper cert-choose__wrapper">
            <div class="container">
                <div class="cert-subtitle">Сделайте лучший подарок
                    <span>близким, родным и друзьям отправьте им</span></div>
                <h2 class="title cert-title">ПОДАРОЧНЫЙ СЕРТИФИКАТ</span></h2>
                <div class="cert-subtitle">на курс любой обучения в IAB</div>

                <div class="cert-img">
                    <img src="img/certificate/cert.jpg" alt="cert">
                </div>

                <div class="cert-blocks">
                    <div class="cert-block">
                        <div class="cert-mark">
                            <img src="img/certificate/birdmark.png" alt="mark">
                        </div>
                        <div class="cert-descr">Закажите ПОДАРОЧНЫЙ СЕРТИФИКАТ прямо сейчас и Вы сможете
                            отправить его получателю по Email сегодня или автоматическим
                            письмом в определенно назначенный Вами день и время.
                        </div>
                    </div>
                    <div class="cert-block">
                        <div class="cert-mark">
                            <img src="img/certificate/birdmark.png" alt="mark">
                        </div>
                        <div class="cert-descr">При заказе Подарочного сертификата Вы сможете выбрать конкретный
                            курс обучения или оставить этот выбор получателю подарка.
                        </div>
                    </div>
                    <div class="cert-block">
                        <div class="cert-mark">
                            <img src="img/certificate/birdmark.png" alt="mark">
                        </div>
                        <div class="cert-descr">Оплатить сертификат вы можете в Вашем Личном кабинете как до так
                            и после отправки получателю, в любое удобное для вас время.
                        </div>
                    </div>
                    <div class="cert-block">
                        <div class="cert-mark">
                            <img src="img/certificate/birdmark.png" alt="mark">
                        </div>
                        <div class="cert-descr">Для тех кто дарит в подарок наш подарочный сертификат, у нас тоже
                            есть подарок - после оплаты сертификата Вы получите
                            дополнительную скидку 50% на любой следующий курс
                            обучения в Международной Академии Бизнеса IAB
                        </div>
                    </div>
                </div>

                <div class="cert-btn btn">
                    <img src="img/big-star.png" alt="star" class="btn-star">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    <div class="btn-text">
                        <span>ЗАКАЗАТЬ</span>
                        <span>ПОДАРОЧНЫЙ СЕРТИФИКАТ</span>
                    </div>
                    <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                </div>

                <img src="img/certificate/border-left.png" alt="border" class="cert-border cert-border__left">
                <img src="img/certificate/border-right.png" alt="border" class="cert-border cert-border__right">

            </div>
        </div>
    </section>

    <div class="margin-helper"></div>

    <section class="about">
        <?php require_once '_about.php'; ?>
    </section>

<?php require_once '_steps.php'; ?>

    <section class="experts">
        <div class="container">
            <h2 class="experts-title title">
                В ОБУЧЕНИИ ВАС ПОДДЕРЖАТ
                <span>ЛУЧШИЕ ЭКСПЕРТЫ</span>
            </h2>

            <div class="experts-slider owl-carousel">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="experts-slide">
                        <div class="experts-img">
                            <img src="img/certificate/expert.png" alt="expert">
                        </div>
                        <div class="experts-name">Владимир Сидоров</div>
                        <div class="experts-prof">Ведущий специалист по поисковому продвижению</div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="aboutUs-diploma">
        <?php require_once '_diploma.php'; ?>
    </section>

    <section class="aboutUs-whyChoose whyChoose">
        <?php require_once '_why-choose.php'; ?>
    </section>

<?php require_once '_clients.php'; ?>
<?php require_once '_faq.php'; ?>

    <section class="success">
        <div class="container">
            <h2 class="title success-title">
                Истории успеха
            </h2>

            <div class="success-slider owl-carousel">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="reviews-slide success-slide">
                        <div class="reviews-img success-img">
                            <img src="img/success/success.png" alt="success">
                            <img src="img/big-star.png" alt="star" class="success-star">
                        </div>
                        <div class="reviews-name success-name">Олег Фёдоров</div>
                        <div class="reviews-prof success-prof">Директор сети ресторанов</div>
                        <div class="reviews-descr success-descr"><p>Данный курс обучения оказался для меня очень
                                полезным и
                                простым в
                                освоении.
                                В курсе я также нашел много интересных дополнительных материалов по специальности.
                                Теперь я могу с уверенностью применять полученные знания в должности
                                директора сети ресторанов.</p>
                            <p>Данный курс обучения оказался для меня очень полезным и простым в
                                освоении.
                                В курсе я также нашел много интересных дополнительных материалов по специальности.
                                Теперь я могу с уверенностью применять полученные знания в должности
                                директора сети ресторанов.</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="cert-btn btn">
                <img src="img/big-star.png" alt="star" class="btn-star">
                <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                <div class="btn-text">
                    <span>ЗАКАЗАТЬ</span>
                    <span>ПОДАРОЧНЫЙ СЕРТИФИКАТ</span>
                </div>
                <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                <img src="img/star-hover.png" alt="star" class="btn-star__hover">
            </div>
        </div>

    </section>

<?php require_once '_footer.php' ?>
<?php require_once '_cert-popup.php' ?>
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