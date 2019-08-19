<section class="box-design box-design_reverse">
    <div class="wrapper">
        <div class="box-design__wrap">
            <?php if( $args['items'] ): $count=8; ?>
            <div class="box-design__slider">
                <div class="design-slider js-design-slider">
                    <?php foreach ($args['items'] as $key => $item): ?>
                        <?php $oneElemClass = ($key === 0) ? ' class="wow slideInRight" data-wow-delay=".4s"' : ''; ?>
                        <div class="design-slider__item">
                            <img src="<?= $item['image']['url']; ?>"<?= $oneElemClass; ?> alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="design-slider-nav js-design-slider-nav">
                    <?php foreach ($args['items'] as $key => $item): $count = $count - 2; ?>
                        <?php $oneElemClass = ($key === 0 || $key === 1 || $key === 2) ? ' wow fadeInLeft' : ''; ?>
                        <div class="design-slider-nav__item<?= $oneElemClass; ?>"
                             data-wow-delay=".<?=$count; ?>s">
                            <div class="design-slider-nav__img">
                                <img src="<?= $item['image']['url']; ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="box-design__info">
                <h2 class="box-design__title title wow fadeInUp"><?=$args['title'];?></h2>
                <h3 class="box-design__subtitle wow fadeInUp" data-wow-delay=".4s"><?=$args['subtitle'];?></h3>
                <p class="box-design__desc wow fadeInUp" data-wow-delay=".6s"><?=$args['desc'];?></p>
                <div class="box-design__btn wow fadeInRight" data-wow-delay=".8s">
                    <a href="<?=$args['btn-url'];?>" class="btn" data-link="<?=$args['btn-name'];?>">
                        <span><?=$args['btn-name'];?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>