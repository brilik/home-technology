<section class="box-design">
    <div class="wrapper">
        <div class="box-design__wrap">
            <div class="box-design__info">
                <h2 class="box-design__title title wow fadeInUp"><?= $args['title']; ?></h2>
                <h3 class="box-design__subtitle wow fadeInUp" data-wow-delay=".4s"><?= $args['subtitle']; ?></h3>
                <p class="box-design__desc wow fadeInUp" data-wow-delay=".6s"><?= $args['desc']; ?></p>
                <div class="box-design__btn">
                    <a href="<?= $args['btn-url']; ?>" class="btn wow fadeInRight" data-wow-delay=".8s"
                       data-link="<?= $args['btn-name']; ?>">
                        <span><?= $args['btn-name']; ?></span>
                    </a>
                </div>
            </div>
            <?php if ($args['items']): ?>
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
                        <?php foreach ($args['items'] as $key => $item): ?>
                            <?php $oneElemClass = ($key === 0 || $key === 1 || $key === 2) ? ' wow fadeInLeft' : ''; ?>
                            <div class="design-slider-nav__item<?= $oneElemClass; ?>"
                                 data-wow-delay=".<?= ($key + 2); ?>s">
                                <div class="design-slider-nav__img">
                                    <img src="<?= $item['image']['url']; ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>