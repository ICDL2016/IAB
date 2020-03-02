<?php require_once '_header.php' ?>

<section class="contacts first-section">
    <div class="container">
        <div class="contacts-wrapper">
            <div class="contacts-form__wrapper">
                <div class="contacts-form__icon">
                    <img src="img/contacts/contacts.png" alt="contacts">
                </div>
                <div class="contacts-title">Контакты</div>
                <div class="contacts-subtitle">Написать в IAB</div>
                <form action="" class="contacts-form">
                    <input class="form-input__password contacts-form__password" type="password" name="password"
                           placeholder="Имя*">
                    <div class="form-input__span form-input__span-password">Поле "Имя"
                        обязательно для заполнения
                    </div>
                    <input class="form-input__email contacts-form__email" type="email" name="email"
                           placeholder="Email*">
                    <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и
                        должно содержать правильный электронный адрес (например, example@mail.ru)
                    </div>

                    <input class="form-input__email contacts-form__email" type="text" name="phone"
                           placeholder="Телефон">

                    <textarea name="msg" id="" cols="30" rows="5" placeholder="Сообщение"></textarea>

                    <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
                    <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>

                    <button class="btn contacts-btn">
                        <img src="img/big-star.png" alt="star" class="btn-star">
                        <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                        <div class="btn-text">
                            <span>ОТПРАВИТЬ</span>
                        </div>
                        <img src="img/big-star.png" alt="star" class="btn-star btn-star2">
                        <img src="img/star-hover.png" alt="star" class="btn-star__hover">
                    </button>
                </form>
            </div>

            <div class="contacts-woman">
                <img src="img/contacts/contacts-form.png" alt="woman">
            </div>
        </div>
    </div>
</section>

<section class="contacts-info">
    <div class="container">
        <div class="contacts-info__title">Многоканальный телефон</div>
        <a href="" class="contacts-phone">+7 958 100 03 78</a>

        <div class="contacts-info__title">Менеджеры учебного отдела</div>
        <div class="contacts-info__blocks">
            <div class="contacts-info__block">
                <div class="contacts-info__img">
                    <img src="img/contacts/manager1.png" alt="manager">
                </div>
                <div class="contacts-info__name">Анастасия</div>
            </div>
            <div class="contacts-info__block">
                <div class="contacts-info__img">
                    <img src="img/contacts/manager2.png" alt="manager">
                </div>
                <div class="contacts-info__name">Дмитрий</div>
            </div>
            <div class="contacts-info__block">
                <div class="contacts-info__img">
                    <img src="img/contacts/manager3.png" alt="manager">
                </div>
                <div class="contacts-info__name">Яна</div>
            </div>
        </div>

        <div class="contacts-info__title">Адрес и схема проезда</div>
        <div class="contacts-address">г. Москва, (ст. метро Международная),
            Пресненская наб., д. 6, стр. 2,
            ММДЦ "Москва-Сити", Башня "Империя"
        </div>
    </div>
</section>

<script charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A79af5c7e5a2cdb6cda6801bbda9bb4395b1c66e8249305f354a060b9edcc8c4f&amp;width=100%25&amp;height=507&amp;lang=ru_RU&amp;scroll=false"></script>

<div class="contacts-gallery">
    <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/1.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/2.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/3.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/4.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/1.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/2.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/3.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/4.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/1.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/2.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/3.jpg"
                                                                                            alt="photo"></a>
    <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/4.jpg"
                                                                                            alt="photo"></a>
</div>

<?php require_once '_footer.php' ?>
<?php require_once '_scripts.php' ?>
<script>
    // псевдовалидация

    let emptyTop2 = false;
    let emptyBottom2 = false;
    $('.contacts-form__email').on('click', function () {
        emptyTop2 = true;
        if (emptyBottom2 === true && ($(this).parent().children('.contacts-form__email').val().length === 0 || $(this).parent().children('.contacts-form__email').val().indexOf('@') === -1)) {
            $(this).parent().children('.form-input__span-email').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-email').hide();
        $(this).parent().children('.contacts-form__email').removeClass('border-red');
    });

    $('.contacts-form__password').on('click', function () {
        emptyBottom2 = true;
        if (emptyTop2 === true && $(this).parent().children('.contacts-form__password').val().length === 0) {
            $(this).parent().children('.form-input__span-password').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-password').hide();
        $(this).parent().children('.contacts-form__password').removeClass('border-red');
    });

    $('.contacts-btn').on('click', function () {
        event.preventDefault();
        let send = true;

        if ($(this).parent().children('.contacts-form__password').val().length === 0) {
            $(this).parent().children('.form-input__span-password').show();
            $(this).parent().children('.contacts-form__password').addClass('border-red');
            send = false;
        }

        if ($(this).parent().children('.contacts-form__email').val().length === 0 || $(this).parent().children('.contacts-form__email').val().indexOf('@') === -1) {
            $(this).parent().children('.form-input__span-email').show();
            $(this).parent().children('.contacts-form__email').addClass('border-red');
            send = false;
        }

        if (send === true) {
            $(this).parent().submit();
        }
    });
</script>
<?php require_once '_end.php' ?>

