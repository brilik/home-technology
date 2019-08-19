<!-- BEGIN FOOTER -->
<footer class="box-footer">
    <div class="wrapper">
        <div class="box-footer__top">
            <div class="footer-logo">
                <div class="footer-logo__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                </div>
                <div class="footer-logo__text">OQI © <?= date('Y'); ?> <br>Все права защищены</div>
            </div>
            <nav class="footer-nav-wrap">
                <?php ar_the_view('menu__footer-pages'); ?>
            </nav>
            <div class="call-us">
                <div class="call-us__icon">
                    <i class="icon-phone"></i>
                </div>
                <div class="call-us__info">
                    <div class="call-us__title">Свяжитесь с нами:</div>
                    <a href="tel:+<?= $themeAR->get_clear_phone($themeAR->get_option("footer_phone")); ?>"
                       class="call-us__link"><?= $themeAR->get_option('footer_phone'); ?></a>
                </div>
            </div>
        </div>
        <div class="box-footer__bottom">
            <div class="social-list-wrap">
                <?php ar_the_view('social', array('position' => 'footer')); ?>
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