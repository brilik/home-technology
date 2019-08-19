<section class="box-question tab-wrap">
    <div class="wrapper">
        <h2 class="box-question__title title wow fadeInDown"><?= $args['title']; ?></h2>
        <h3 class="box-question__subtitle wow fadeInUp" data-wow-delay=".3s"><?= $args['subtitle']; ?></h3>
        <ul class="nav-tab-list tabs wow fadeInDown" data-wow-delay=".5s">
            <li class="nav-tab-list__item active">
                <a href="#tab_3" class="nav-tab-list__link"><?= $args['tab_title_1']; ?></a>
            </li>
            <li class="nav-tab-list__item">
                <a href="#tab_4" class="nav-tab-list__link"><?= $args['tab_title_2']; ?></a>
            </li>
        </ul>
    </div>
    <div class="box-question__wrap">
        <div class="box-question__img wow slideInLeft"
             style="background: url(<?= $args['bg']['url']; ?>) center center/cover no-repeat;"
             data-wow-delay=".6s"></div>
        <div class="box-tab-cont wow fadeInUp" data-wow-delay=".6s">
            <div class="tab-cont" id="tab_3">
                <?php ar_the_view('forms__feedback-call'); ?>
            </div>
            <div class="tab-cont hide" id="tab_4">
                <?php ar_the_view('forms__feedback-mail'); ?>
            </div>
        </div>
    </div>
</section>