<section class="box-main">
    <div class="main-slider-progress">
        <div class="main-slider-progress__line js-slider-progress-line"></div>
    </div>
    <div class="main-slider-pagination">
        <div class="wrapper">
            <div class="slick-arrow slick-prev">
                <i class="icon-arrow-prev"></i>
            </div>
            <div class="slick-arrow slick-next">
                <i class="icon-arrow-next"></i>
            </div>
        </div>
    </div>
    <?php if ($args['items']): ?>
        <div class="main-slider js-main-slider">
            <?php foreach ($args['items'] as $key => $item): ?>
                <?php $oneElemClass = ($key === 0) ? ' wow fadeInLeft' : ''; ?>
                <div class="main-slider__item" style="background-image: url(<?= $item['image']['url']; ?>)">
                    <div class="main-slider__wrap">
                        <h1 class="main-slider__title<?= $oneElemClass; ?>"
                            data-wow-delay=".1s"><?= $item['title']; ?></h1>
                        <p class="main-slider__desc<?= $oneElemClass; ?>" data-wow-delay=".3s"><?= $item['desc']; ?></p>
                        <div class="main-slider__btn<?= $oneElemClass; ?>" data-wow-delay=".5s">
                            <a href="<?= $item['btn-url']; ?>" class="btn btn-fill"
                               data-link="<?= $item['btn-name']; ?>">
                                <span><?= $item['btn-name']; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>