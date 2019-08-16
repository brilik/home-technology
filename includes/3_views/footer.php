<!-- BEGIN FOOTER -->
<footer class="box-footer">
    <div class="wrapper">
        <div class="box-footer__top">
            <div class="footer-logo">
                <div class="footer-logo__img">
                    <img src="<?=get_template_directory_uri();?>/assets/img/logo.svg" alt="">
                </div>
                <div class="footer-logo__text">OQI © 2019 <br>Все права защищены</div>
            </div>
            <nav class="footer-nav-wrap">
                <ul class="footer-nav">
                    <li class="footer-nav__item">
                        <ul class="footer-inner-nav">
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Конструктор</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Готовые интерьеры</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Вакансии</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Материалы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-nav__item">
                        <ul class="footer-inner-nav">
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">О компании</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Доставка</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Работа в компании</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Сотрудничество</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-nav__item">
                        <ul class="footer-inner-nav">
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">О ремонте</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Контакты</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Вопросы и ответы</a>
                            </li>
                            <li class="footer-inner-nav__item">
                                <a href="#" class="footer-inner-nav__link">Оцените качество обслуживания</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="call-us">
                <div class="call-us__icon">
                    <i class="icon-phone"></i>
                </div>
                <div class="call-us__info">
                    <div class="call-us__title">Свяжитесь с нами:</div>
                    <a href="tel:+74952300302" class="call-us__link">+7 (495) 230-03-02</a>
                </div>
            </div>
        </div>
        <div class="box-footer__bottom">
            <div class="social-list-wrap">
                <ul class="social-list">
                    <li class="social-list__item">
                        <a href="#" class="social-list__link icon-bigger vk">
                            <i class="icon-vk"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link icon-big twitter">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link fb">
                            <i class="icon-fb"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link phone-1">
                            <i class="icon-phone-1"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link ok">
                            <i class="icon-ok"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="footer-policy">Политика конфиденциальности</a>
            <div class="footer-company">
                <div class="footer-company__title">Дизайн и разработка</div>
                <a href="https://verstkovo.ru/" class="footer-company__link">«Slice Planet»</a>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER EOF   -->

<?php ar_the_view("popup-box"); ?>
</div>
<!-- BODY EOF   -->

<?php wp_footer(); ?>

</body>
</html>