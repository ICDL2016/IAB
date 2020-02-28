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
                    <div class="programs">
                        <?php for ($k = 0; $k < 8; $k++) : ?>
                            <div class="programs-block">
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
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>