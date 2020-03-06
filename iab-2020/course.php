<?php require_once '_header.php' ?>

<section class="video course-video">
    <div class="container video-wrapper course-video__wrapper">
        <div class="video-play" onclick="play1(event)">
            <?php require_once 'img/video/play.svg'; ?>
        </div>
    </div>
    <div id="divPlayer1"></div>
</section>

<section class="choose course-choose">
    <div class="choose-bg course-choose__bg">
        <img src="img/course/course-choose.png" alt="course">
    </div>

    <div class="choose-wrapper course-choose__wrapper">
        <div class="container">
            <div class="course-main__subtitle">Дистанционный курс обучения</div>
            <h2 class="course-main__title title"><span>УПРАВЛЕНИЕ В СФЕРЕ ГОСТИНИЧНО-</span>
                <span>-РЕСТОРАННОГО БИЗНЕСА И ТУРИЗМА</span></h2>

            <div class="course-figure">
                <div class="course-figure__hours course-figure__block">
                    <div class="course-figure__icon">
                        <img src="img/course/hours.png" alt="hours">
                    </div>
                    <div class="course-figure__text">
                        <div class="course-figure__text-hours">190 ч.</div>
                        <div class="course-figure__text-comment">(2 недели)</div>
                    </div>
                </div>

                <div class="course-figure__price course-figure__block">
                    <div class="course-figure__icon">
                        <img src="img/course/price.png" alt="price">
                    </div>
                    <div class="course-figure__text">
                        <div class="course-figure__price-old">35000 р.</div>
                        <div class="course-figure__price-new">17500 р.</div>
                    </div>
                </div>

                <div class="course-figure__cta">
                    Начните обучение
                    <span>БЕСПЛАТНО</span>
                    прямо сейчас
                </div>

                <div class="btn popup-btn course-figure__btn">
                    <img src="img/big-star.png" alt="star" class="btn-star">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    <div class="btn-text">
                        <span>НАЧАТЬ ОБУЧЕНИЕ</span>
                        <span>25.01.2020</span>
                    </div>
                    <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                </div>
            </div>
        </div>


    </div>

    <div class="container course-container">
        <h2 class="title diploma-title">Получите <span>ОФИЦИАЛЬНЫЙ ДИПЛОМ</span></h2>
        <h3 class="diploma-subtitle">с международным приложением в кратчайшие сроки</h3>

        <div class="diploma-img">
            <a href="img/diploma/diploma.jpg" class="fancybox-buttons diploma-img__desk" data-fancybox="gallery">
                <?php require 'img/diploma/tick.svg'; ?>
                <img src="img/diploma/diploma.jpg" alt="photo">
            </a>
            <a href="img/diploma/diploma2.png" class="fancybox-buttons" data-fancybox="gallery">
                <?php require 'img/diploma/tick.svg'; ?>
                <img src="img/diploma/diploma2.png" alt="photo">
            </a>
            <a href="img/diploma/diploma3.jpg" class="fancybox-buttons" data-fancybox="gallery">
                <?php require 'img/diploma/tick.svg'; ?>
                <img src="img/diploma/diploma3.jpg" alt="photo">
            </a>
        </div>

        <div class="diploma-bottom">
            <a href="img/diploma/diploma.jpg" class="fancybox-buttons diploma-img__mob" data-fancybox="gallery">
                <?php require 'img/diploma/tick.svg'; ?>
                <img src="img/diploma/diploma.jpg" alt="photo">
            </a>
            <div class="diploma-license">
                <div class="diploma-icon">
                    <?php require_once 'img/diploma/icon.svg'; ?>
                </div>
                <div class="diploma-descr">Лицензия на образовательную деятельность №038379
                    <span>Международный Центр Дистанционного Образования</span></div>
                <div class="diploma-icon">
                    <a href="img/diploma/diploma4.jpg" class="fancybox-buttons" data-fancybox="gallery">
                        <img src="img/diploma/diploma4.jpg" alt="photo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="course-margin"></div>

<section class="course-programs">
    <div class="container">
        <div class="course-main__subtitle course-programs__subtitle">Программа дистанционного курса обучения</div>
        <h2 class="course-programs__title title">УПРАВЛЕНИЕ В СФЕРЕ
            <span>ГОСТИНИЧНО-РЕСТОРАННОГО</span>
            БИЗНЕСА И ТУРИЗМА</h2>
    </div>
    <div class="programs offer-blocks">
        <?php for ($k = 0; $k < 20; $k++) : ?>
            <div class="programs-block offer-block">
                <div class="programs-block__img">
                    <div class="programs-block__hover">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="programs-block__descr">
                    <div class="programs-block__title">Часть 1</div>
                    <div class="programs-block__text">Санитарные нормы на предприятии
                        общественного питания</div>
                    <div class="programs-block__more">Подробнее</div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="offer-more">
        <span class="offer-current"></span> из <span class="offer-all"></span> <a href="#">Еще</a>
    </div>
</section>


<section class="about course-about">
    <div class="container">
        <div class="title about-title">
            Пройди обучение в Международной Академии
            <span>Бизнеса получи престижный диплом и стань</span>
            <span>высокооплачиваемым специалистом в интересной</span>
            тебе сфере деятельности
        </div>

        <div class="about-block">
            <div class="about-icon">
                <img src="img/about/star.svg" alt="star">
            </div>
            <div class="about-descr">Этот содержательный курс даст вам именно те знания которые вы ищите. Пройдите
                в Новом Бизнес Университете получите престижный диплом и станьте
                высокооплачиваемым специалистом в интересной Вам сфере деятельности.
            </div>
        </div>
        <div class="about-block">
            <div class="about-icon">
                <img src="img/about/star.svg" alt="star">
            </div>
            <div class="about-descr">Этот содержательный курс даст вам именно те знания которые вы ищите. Пройдите
                в Новом Бизнес Университете получите престижный диплом и станьте
                высокооплачиваемым специалистом в интересной Вам сфере деятельности.
            </div>
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
                <img src="img/about/star.svg" alt="star">
            </div>
            <div class="about-descr">Этот содержательный курс даст вам именно те знания которые вы ищите. Пройдите
                в Новом Бизнес Университете получите престижный диплом и станьте
                высокооплачиваемым специалистом в интересной Вам сфере деятельности.
            </div>
        </div>

        <div class="btn popup-btn course-about__btn">
            <img src="img/big-star.png" alt="star" class="btn-star">
            <img src="img/star-hover.png" alt="star" class="btn-star__hover">
            <div class="btn-text">
                <span>НАЧАТЬ ОБУЧЕНИЕ</span>
                <span>25.01.2020</span>
            </div>
            <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
            <img src="img/star-hover.png" alt="star" class="btn-star__hover">
        </div>
    </div>

</section>

<?php require_once '_advantages.php' ?>
<?php require_once '_steps.php' ?>
<?php require_once '_experts.php' ?>

<section class="course-whyChoose whyChoose">
    <div class="container">
        <h2 class="whyChoose-title course-whyChoose__title title">В вашем резюме, которое мы поможем Вам составить после прохождения данного
            обучения, Вы сможете указать</h2>

        <div class="whyChoose-list">
            <div class="whyChoose-item">
                <img src="img/why-choose/star_tick.svg" alt="star">
                <span>Актуальное и востребованное образование по лицензированным
                    программам обучения</span>
            </div>
            <div class="whyChoose-item">
                <img src="img/why-choose/star_tick.svg" alt="star">
                <span>Получение официального диплома с международным приложением
                    с внесением в ФИС ФРДО</span>
            </div>
            <div class="whyChoose-item">
                <img src="img/why-choose/star_tick.svg" alt="star">
                <span>Удобные и понятные современные дистанционные курсы с аудио озвучкой
                    и видео уроками</span>
            </div>
            <div class="whyChoose-item">
                <img src="img/why-choose/star_tick.svg" alt="star">
                <span>Востребованность выпускников Международной Академии Бизнеса
                    на рынке труда</span>
            </div>
            <div class="whyChoose-item">
                <img src="img/why-choose/star_tick.svg" alt="star">
                <span>Помощь в трудоустройстве по новой
                    специальности</span>
            </div>
        </div>
    </div>
</section>

<?php require_once '_reviews.php' ?>
<section class="aboutUs-whyChoose whyChoose">
    <?php require_once '_why-choose.php'; ?>
</section>
<?php require_once '_clients.php' ?>
<?php require_once '_faq.php' ?>

<section class="aboutUs-success">
    <?php require_once '_success.php'; ?>
</section>

<section class="start course-start">
    <div class="container">
        <div class="start-block">

            <div class="start-left">
                <div class="start-icon course-start__icon">
                    <img src="img/course/course-start.png" alt="course">
                </div>

                <h2 class="start-title course-start__title">Начни обучение по курсу
                    <span>УПРАВЛЕНИЕ В СФЕРЕ ГОСТИНИЧНО-РЕСТОРАННОГО БИЗНЕСА И ТУРИЗМА</span></h2>

                <div class="start-cta">
                    <div class="start-figure">
                        <div class="start-free">БЕСПЛАТНО</div>
                        <div class="start-now">прямо сейчас</div>
                    </div>

                    <div class="btn start-btn popup-btn">
                        <?php require '_btn-star.php';?>
                    </div>
                </div>
            </div>


            <div class="start-img course-start__img">
                <img src="img/course/course-woman.png" alt="woman">
            </div>
        </div>
    </div>
</section>

<section class="course-other">
    <div class="container">
        <div class="course-other__subtitle subtitle">Другие дистанционные курсы обучения раздела</div>
        <h2 class="course-other__title title">ГОСТИНИЧНО-РЕСТОРАННЫЙ БИЗНЕС И ТУРИЗМ</h2>
    </div>

    <div class="course-other__blocks">
        <?php for($i=0; $i<20; $i++) : ?>
        <div class="course-other__block">
            <div class="course-other__img"></div>
            <div class="course-other__info">
                <div class="course-other__name">Полный очный курс гостиничного управления "УПРАВЛЕНИЕ ГОСТИНИЧНЫМ БИЗНЕСОМ"</div>
                <div class="course-other__bottom">
                    <div class="course-other__hours">340 часов</div>
                    <div class="course-other__price">
                        <span class="course-other__price-old">95000 Р</span>
                        <span class="course-other__price-new">47500 Р</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor;?>
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
        $('.course-margin').css('margin-top', '0');
        $('.course-video').css('padding-bottom', '0');
        $('.course-video').css({
            position: 'relative',
            zIndex: 2,
            bottom: '-3px'
        });
        $('.course-choose__wrapper, .course-container').css('position', 'static');
        $('.course-choose__wrapper').css({
            transform: 'none',
            padding: '30px 0'
        });
        $('.course-choose__bg').css('display', 'none');
        $('#divPlayer1').show();
        $('iframe').css('display', 'block');
        player1.playVideo();
    }
</script>
<?php require_once '_end.php' ?>
