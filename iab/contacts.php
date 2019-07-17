<?php require_once '_header.php'?>

<div class="contacts-title course-title">
    <strong>Контакты</strong>
</div>

<section class="form-wrap">
    <div class="container">
        <form action="#" class="form">
            <div class="form-body">
                <input class="form-input form-input__name" type="text" placeholder="Имя*" name="name">
                <span class="form-input__span form-input__span-name">Поле "Имя" обязательно к заполнению</span>
                <input class="form-input form-input__email" type="text" placeholder="Email*" name="email">
                <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
                <input class="form-input form-input__email" type="text" placeholder="Телефон" name="phone">
                <textarea class="contacts-textarea" rows="4" name="message" placeholder="Сообщение"></textarea>

                <div class="form-checkbox__block">
                    <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                    <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
                </div>
            </div>

            <div class="form-bottom">
                <span class="form-bottom__top contacts-submit">Отправить</span>
            </div>
        </form>
    </div>
</section>

<section class="contacts-block">
    <div class="container">

        <div class="contacts-phone__title">Многоканальный телефон</div>
        <div class="contacts-phone">+7 958 100 03 78</div>

        <div class="contacts-managers__title">Менеджеры учебного отдела</div>
        <div class="contacts-managers">
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Анастасия</div>
            </div>
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Дмитрий</div>
            </div>
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Яна</div>
            </div>
        </div>

        <div class="contacts-address__title">Адрес и схема проезда:</div>
        <div class="contacts-address">г. Москва, (ст. метро Международная), <br>
            Пресненская наб., д. 6, стр. 2, <br>
            ММДЦ "Москва-Сити", Башня "Империя"
        </div>

    </div>

    <script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A79af5c7e5a2cdb6cda6801bbda9bb4395b1c66e8249305f354a060b9edcc8c4f&amp;width=100%25&amp;height=507&amp;lang=ru_RU&amp;scroll=false"></script>

    <div class="container">
        <div class="contacts-gallery">
            <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/1.jpg" alt="photo"></a>
            <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/2.jpg" alt="photo"></a>
            <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/3.jpg" alt="photo"></a>
            <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/4.jpg" alt="photo"></a>
            <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/1.jpg" alt="photo"></a>
            <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/2.jpg" alt="photo"></a>
            <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/3.jpg" alt="photo"></a>
            <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/4.jpg" alt="photo"></a>
            <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/1.jpg" alt="photo"></a>
            <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/2.jpg" alt="photo"></a>
            <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/3.jpg" alt="photo"></a>
            <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/4.jpg" alt="photo"></a>
        </div>
    </div>
</section>

<div style="margin-bottom: 30px"></div>

<div class="or-choose__btn">
    <a href="#">Выберите программу обучения</a>
</div>

<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_comments.php'?>
<?php require_once '_footer.php'?>