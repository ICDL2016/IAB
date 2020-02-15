<?php require_once '_header.php' ?>

    <section class="login first-section">
        <div class="container">
            <div class="login-form__wrapper">
                <div class="login-form__icon">
                    <img src="img/small-pages/login.svg" alt="login">
                </div>
                <div class="login-title">Авторизация</div>
                <div class="login-subtitle">Введите Ваш email и пароль</div>
                <form action="" class="login-form">
                    <input class="form-input__email login-form__email" type="email" name="email" placeholder="Email*">
                    <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и
                        должно содержать правильный электронный адрес (например, example@mail.ru)
                    </div>
                    <input class="form-input__password login-form__password" type="password" name="password"
                           placeholder="Пароль*">
                    <div class="form-input__span form-input__span-password">Поле "Пароль"
                        обязательно для заполнения
                    </div>

                    <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
                    <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>

                    <button class="btn login-btn">
                        <img src="img/big-star.png" alt="star" class="btn-star">
                        <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                        <div class="btn-text">
                            <span>ВОЙТИ</span>
                        </div>
                        <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                        <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    </button>
                </form>
            </div>

            <div class="login-remind">
                <a href="remind.php">Забыли пароль?</a>
            </div>
        </div>
    </section>

<?php require_once '_footer.php' ?>
<?php require_once '_scripts.php' ?>
    <script>
        // псевдовалидация

        let emptyTop2 = false;
        let emptyBottom2 = false;
        $('.login-form__email').on('click', function () {
            emptyTop2 = true;
            if (emptyBottom2 === true && ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1)) {
                $(this).parent().children('.form-input__span-email').show();
            }
        }).on('input', function () {
            $(this).parent().children('.form-input__span-email').hide();
            $(this).parent().children('.login-form__email').removeClass('border-red');
        });

        $('.login-form__password').on('click', function () {
            emptyBottom2 = true;
            if (emptyTop2 === true && $(this).parent().children('.login-form__password').val().length === 0) {
                $(this).parent().children('.form-input__span-password').show();
            }
        }).on('input', function () {
            $(this).parent().children('.form-input__span-password').hide();
            $(this).parent().children('.login-form__password').removeClass('border-red');
        });

        $('.login-btn').on('click', function () {
            event.preventDefault();
            let send = true;

            if ($(this).parent().children('.login-form__password').val().length === 0) {
                $(this).parent().children('.form-input__span-password').show();
                $(this).parent().children('.login-form__password').addClass('border-red');
                send = false;
            }

            if ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1) {
                $(this).parent().children('.form-input__span-email').show();
                $(this).parent().children('.login-form__email').addClass('border-red');
                send = false;
            }

            if (send === true) {
                $(this).parent().submit();
            }
        });
    </script>
<?php require_once '_end.php' ?>