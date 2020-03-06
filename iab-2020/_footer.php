<footer class="footer">
    <div class="container footer-wrapper">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="img/footer/footer-logo.svg" alt="logo">
            </div>
            <div class="footer-social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-vk"></i></a>
                <a href=""><i class="fa fa-youtube-play"></i></a>
                <a href=""><i class="fa fa-telegram"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
            </div>
            <div class="footer-license">
                <div class="footer-license__title">
                    Лицензия на образовательную
                    <span>деятельность №038379</span>
                </div>
                <div class="footer-license__img">
                    <a href="img/footer/footer-diploma.jpg" class="fancybox-buttons" data-fancybox="gallery">
                        <img src="img/footer/footer-diploma.jpg" alt="photo">
                    </a>
                </div>
                <div class="footer-license__descr">
                    Перспективное образование
                    <span>с 2001 года</span>
                </div>
            </div>
        </div>

        <div class="footer-right">
            <ul class="footer-menu">
                <li><a href="">ЛИЧНЫЙ КАБИНЕТ</a></li>
                <li><a href="">ОБ АКАДЕМИИ</a></li>
                <li><a href="">ПРОГРАММЫ ОБУЧЕНИЯ</a></li>
                <li><a href="">ПРОФОРИЕНТАЦИЯ</a></li>
                <li><a href="">ПОДАРОЧНЫЙ СЕРТИФИКАТ</a></li>
                <li><a href="">КОНТАКТЫ</a></li>
            </ul>

            <div class="footer-phone">
                <img src="img/big-star.png" alt="star" class="footer-star footer-star__left">
                <a href="tel:879581000378">+7 958 100 03 78</a>
                <img src="img/big-star.png" alt="star" class="footer-star footer-star__right">
            </div>

            <div class="footer-address">
                <span>г. Москва,</span>
                <span>Пресненская наб., д. 6, стр. 2,</span>
                <span>ММДЦ "Москва-Сити", Башня</span>
                <span>"Империя"</span>
            </div>
        </div>
    </div>
</footer>

<div class="overlay"></div>
<div class="popup">
    <div class="popup-img">
        <img src="img/footer/popup.png" alt="popup">
    </div>
    <div class="popup-close">
        <i class="fa fa-close"></i>
    </div>

    <h2 class="popup-title">Зарегистрируйтесь,
        <span>чтобы начать обучение</span></h2>

    <form class="popup-form">
        <input class="popup-form__name" type="text" name="name" placeholder="Имя*">
        <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для заполнения</div>
        <input class="popup-form__email" type="email" name="email" placeholder="Email*">
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и
            должно содержать правильный электронный адрес (например, example@mail.ru)
        </div>
        <input class="popup-form__phone" type="text" name="phone" placeholder="Телефон">

        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch2" checked required>
        <label class="form-label" for="ch2">Я принимаю <a href="#">Условия Конфиденциальности</a></label>

        <div class="btn popup-form__btn">
            <?php require '_btn-star.php';?>
        </div>
    </form>
</div>

<div class="popup-course">
    <div class="popup-close">
        <i class="fa fa-close"></i>
    </div>
    <h2 class="popup-course__title">Заголовок</h2>
    <ul>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
    </ul>
</div>







