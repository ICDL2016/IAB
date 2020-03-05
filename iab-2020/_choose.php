<section class="choose">
    <div class="choose-bg">
        <img src="img/choose/choose-bg.png" alt="choose">
    </div>

    <div class="choose-wrapper">
        <div class="choose-title">
            <span>ВЫБЕРИТЕ СФЕРУ И</span>
            <span>ПРОГРАММУ ОБУЧЕНИЯ</span>
        </div>

        <div class="directions-blocks choose-blocks">
            <?php for ($i = 0; $i < 20; $i++) : ?>
                <div class="directions-block margin-helper" data-program="<?= $i + 1 ?>">
                    Гостиничный бизнес и туризм
                </div>
                <div class="programs-wrap" data-program="<?= $i + 1 ?>">
                    <div class="programs-wrap__block">
                        <?php for($k=0; $k<10; $k++) : ?>
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
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>