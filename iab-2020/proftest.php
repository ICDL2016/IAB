<?php require_once '_header.php' ?>

    <section class="video proforient-video">
        <div class="container video-wrapper">
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

        <div class="choose-wrapper cert-choose__wrapper">
            <div class="container">

                <img src="img/certificate/border-left.png" alt="border" class="cert-border cert-border__left">
                <img src="img/certificate/border-right.png" alt="border" class="cert-border cert-border__right">

            </div>
        </div>
    </section>

    <div class="margin-helper"></div>

<?php require_once '_footer.php' ?>
<?php require_once '_scripts.php' ?>
<?php require_once '_end.php' ?>