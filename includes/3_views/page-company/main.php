<?php ar_the_view('breadcrumbs'); ?>
<section class="box-about">
    <div class="wrapper">
        <h1 class="title wow fadeInDown"><?php the_title(); ?></h1>
        <div class="box-about__wrap">
            <div class="box-about__img wow slideInLeft" data-wow-delay=".2s">
                <img src="<?= $args['img']['url']; ?>" alt="">
            </div>
            <div class="box-about__info">
                <div class="box-about__row wow fadeInRight" data-wow-delay=".4s">
                    <h3 class="box-about__title">О нас</h3>
                    <p class="box-about__desc"><?= $args['desc']; ?></p>
                </div>
                <div class="box-about__row box-about__row_dark wow fadeInRight" data-wow-delay=".6s">
                    <h3 class="box-about__title">Реквизиты</h3>
                    <?php if( $args['item'] ): ?>
                    <div class="requisites-list-wrap">
                        <ul class="requisites-list">
                            <?php foreach ( $args['item'] as $item ): ?>
                            <li class="requisites-list__item"><?= $item['requisite']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <div class="box-about__logo">
                        <img src="<?= $themeAR->get_src(); ?>/assets/img/oqi.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>