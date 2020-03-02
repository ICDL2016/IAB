<?php require_once '_header.php' ?>

    <section class="proftest first-section">
        <div class="container">
            <div class="proftest-img">
                <img src="img/small-pages/proftest.png" alt="proftest">
            </div>

            <h2 class="proftest-title">ПРОФОРИЕНТАЦИОННЫЙ ТЕСТ</h2>
            <div class="proftest-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa cumque deleniti dicta doloremque eius et eum excepturi minus nemo nisi placeat quis, recusandae reprehenderit sequi sit suscipit tempore, totam.</div>

            <div class="proftest-buttons">
                <div class="proftest-button">
                    Ухаживать за животными
                </div>
                <div class="proftest-button">
                    Управлять машинами, приборами
                </div>
            </div>

            <div class="proftest-answers">
                <div class="proftest-answers__text">Вы ответили на 1 из 21</div>
                <div class="proftest-steps">
                    <?php for ($i=0; $i<21; $i++) : ?>
                        <div class="proftest-step"><?=$i+1;?></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

<?php require_once '_footer.php' ?>
<?php require_once '_scripts.php' ?>
<?php require_once '_end.php' ?>