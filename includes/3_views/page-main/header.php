<header class="box-header<?= ( is_front_page() || is_home() )? '' : ' light'; ?>">
    <div class="wrapper">
        <div class="box-header__wrap">
            <div class="header-logo">
                <img src="<?=get_template_directory_uri();?>/assets/img/logo.svg" alt="">
            </div>
            <nav class="header-list-wrap">
                <?php ar_the_view('menu__header-main'); ?>
            </nav>
            <div class="header-info">
                <div class="header-order">
                    <i class="icon-basket"></i>
                </div>
                <div class="header-favorites">
                    <i class="icon-heart"></i>
                </div>
                <div class="call-us">
                    <div class="call-us__icon">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="call-us__info">
                        <div class="call-us__title">Свяжитесь с нами:</div>
                        <a href="tel:+<?= $themeAR->get_clear_phone($themeAR->get_option("header_phone")); ?>"
                           class="call-us__link"><?= $themeAR->get_option("header_phone"); ?></a>
                    </div>
                </div>
                <div class="form-search">
                    <div class="form-search__icon js-form-search">
                        <i class="icon-search"></i>
                    </div>
                    <form class="form-submit">
                        <div class="form-submit__wrap">
                            <div class="form-submit__search input-border">
                                <input type="text" class="form-submit__input" placeholder="Поиск">
                                <div class="form-submit__btn btn" data-link="Найти">
                                    <input type="submit" class="form-submit__submit">
                                    <span>Найти</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="#popup-signin" class="login js-fancybox">
                    <div class="login__icon">
                        <i class="icon-login"></i>
                    </div>
                    <span class="login__text">Войти</span>
                </a>
                <div class="header-btn-wrap">
                    <div class="header-btn js-header-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <nav class="header-menu-list-wrap">
                    <?php ar_the_view('menu__header-burger'); ?>
                </nav>
                <div class="call-us">
                    <div class="call-us__icon">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="call-us__info">
                        <div class="call-us__title">Свяжитесь с нами:</div>
                        <a href="tel:+<?= $themeAR->get_clear_phone($themeAR->get_option("header_phone")); ?>"
                           class="call-us__link"><?= $themeAR->get_option("header_phone"); ?></a>
                    </div>
                </div>
                <div class="social-list-wrap">
                    <?php ar_the_view('social', array('position'=>'header')); ?>
                </div>
            </div>
        </div>
    </div>
</header>