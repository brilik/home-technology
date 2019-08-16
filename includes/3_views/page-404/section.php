<section class="box-error">
    <div class="wrapper">
        <div class="box-error__img wow fadeIn">
            <img src="<?=get_template_directory_uri();?>/assets/img/404.svg" alt="">
        </div>
        <h1 class="box-error__title title wow fadeInUp" data-wow-delay=".2s"><span>Ой!</span> Похоже, мы не можем найти нужную вам страницу.</h1>
        <h3 class="box-error__subtitle wow fadeInUp" data-wow-delay=".3s">Вот несколько полезных ссылок:</h3>
        <div class="error-list-wrap">
            <?php ar_the_view('menu__page-404'); ?>
        </div>
    </div>
</section>