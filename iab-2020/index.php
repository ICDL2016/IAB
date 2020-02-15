<?php require_once '_header.php'; ?>

    <section class="video">
        <div class="container video-wrapper">
            <div class="video-play" onclick="play1(event)">
                <?php require_once 'img/video/play.svg'; ?>
            </div>
        </div>
        <div id="divPlayer1"></div>
    </section>

<?php require_once '_choose.php'; ?>
<?php require_once '_diploma.php'; ?>
<?php require_once '_advantages.php'; ?>
<?php require_once '_steps.php'; ?>
<?php require_once '_reviews.php'; ?>
<?php require_once '_about.php'; ?>
<?php require_once '_clients.php'; ?>
<?php require_once '_why-choose.php'; ?>
<?php require_once '_success.php'; ?>
<?php require_once '_faq.php'; ?>
<?php require_once '_start.php'; ?>

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
                    height: '450',
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
            $('#divPlayer1').show();
            $('iframe').css('display', 'block');
            player1.playVideo();
        }
    </script>
<?php require_once '_end.php'; ?>