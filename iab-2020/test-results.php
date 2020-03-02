<?php require_once '_header.php' ?>

<section class="results first-section">
    <div class="container">
        <div class="proftest-img">
            <img src="img/small-pages/proftest.png" alt="proftest">
        </div>

        <h3 class="results-title">Результаты тестирования</h3>
        <table class="results-table">
            <thead>
            <tr>
                <td>Типы профессий</td>
                <td>Баллы</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Человек - природа</td>
                <td class="results-table__points">5</td>
            </tr>
            <tr>
                <td>Человек - техника</td>
                <td class="results-table__points">6</td>
            </tr>
            <tr>
                <td>Человек - человек</td>
                <td class="results-table__points">3</td>
            </tr>
            <tr>
                <td>Человек - знаковая техника, знаковый образ</td>
                <td class="results-table__points">4</td>
            </tr>
            <tr>
                <td>Человек - художественный образ</td>
                <td class="results-table__points">2</td>
            </tr>
            </tbody>
        </table>

        <p class="results-p">Большинство профессий типа "Человек - Знаковая система" связано с переработкой информации и
            различается по особенностям предмета труда.</p>

        <p class="results-p">Это могут быть:</p>

        <div class="results-list">
            <div class="results-item">
                <div class="results-item__num">1</div>
                <div class="results-item__descr">Тексты на родном или иностранном языках (редактор, корректор,
                    машинистка, делопроизводитель, телеграфист, наборщик)
                </div>
            </div>
            <div class="results-item">
                <div class="results-item__num">2</div>
                <div class="results-item__descr">Цифры, формулы, таблицы (программист, оператор ЭВМ, экономист,
                    бухгалтер, статистик)
                </div>
            </div>
            <div class="results-item">
                <div class="results-item__num">3</div>
                <div class="results-item__descr">Чертежи, схемы, карты (конструктор, инженер-технолог, чертежник,
                    копировальщик, штурман, геодезист)
                </div>
            </div>
            <div class="results-item">
                <div class="results-item__num">4</div>
                <div class="results-item__descr">Звуковые сигналы (радист, стенографист, телефонист, звукооператор)
                </div>
            </div>
        </div>

        <div class="results-p">
            Психологические требования профессий типа "Человек - Знаковая система" к человеку: хорошая оперативная и
            механическая память, способность к длительной концентрации внимания на отвлеченном (знаковом) материале,
            хорошее распределение и переключение внимания, точность восприятия; умение видеть то, что стоит за условными
            знаками; усидчивость, терпение, логическое мышление.
        </div>
    </div>
</section>

<section class="results-most">
    <div class="container">
        <h2 class="results-most__title title">В данных сферах вы сможете добиться наилучших результатов</h2>
    </div>

    <div class="directions-blocks choose-blocks">
        <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="directions-block margin-helper" data-program="<?= $i + 1 ?>">
                Гостиничный бизнес и туризм
            </div>
        <?php endfor; ?>
    </div>
</section>

<section class="about">
    <?php require_once '_about.php'; ?>
</section>

<?php require_once '_advantages.php'; ?>

<section class="diploma">
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

<section class="start">
    <div class="container">
        <div class="start-block">

            <div class="start-left results-start__left">
                <div class="start-icon">
                    <img src="img/start/home.svg" alt="home">
                </div>

                <h2 class="start-title results-start__title">Начни обучение
                    <span>с вводного курса</span></h2>
                <div class="start-free results-start__free">БЕСПЛАТНО</div>
                <div class="start-now results-start__now">прямо сейчас</div>

                <div class="btn results-start__btn">
                    <img src="img/big-star.png" alt="star" class="btn-star">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    <div class="btn-text">
                        <span>НАЧАТЬ ТЕСТ</span>
                    </div>
                    <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                    <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                </div>
            </div>


            <div class="start-img results-start__img">
                <img src="img/results/results-start.png" alt="men">
            </div>
        </div>
    </div>
</section>

<?php require_once '_footer.php' ?>
<?php require_once '_scripts.php' ?>
<?php require_once '_end.php' ?>

