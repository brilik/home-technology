<?php
$posts = get_posts(array(
    'numberposts' => $args['numberposts'],
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'feedback',
    'suppress_filters' => true,
));
?>
    <section class="box-feedback">
        <div class="wrapper">
            <h2 class="box-feedback__title title wow fadeInUp"><?= $args['title']; ?></h2>
            <h3 class="box-feedback__subtitle wow fadeInUp" data-wow-delay=".3s"><?= $args['subtitle']; ?></h3>
            <div class="feedback-slider-wrap">
                <div class="feedback-slider js-feedback-slider">
                    <?php foreach ($posts as $post) {
                        setup_postdata($post);
                        $dataWowDelay = 3; ?>
                        <div class="feedback-slider__item">
                            <div class="feedback-slider__box">
                                <div class="feedback-slider__img wow fadeInRight"
                                     data-wow-delay=".<?= $dataWowDelay; ?>s">
                                    <?= get_the_post_thumbnail($post->ID); ?>
                                </div>
                                <div class="feedback-slider__wrap">
                                    <div class="feedback-slider__top">
                                        <div class="feedback-slider__avatar wow fadeInLeft"
                                             data-wow-delay=".<?= $dataWowDelay; ?>s">
                                            <img src="<?= get_field('ava', $post->ID)['url']; ?>"
                                                 alt="<?= get_field('ava', $post->ID)['alt']; ?>">
                                        </div>
                                        <div class="feedback-slider__info wow fadeInRight"
                                             data-wow-delay=".<?= $dataWowDelay; ?>s">
                                            <div class="feedback-slider__user"><?= get_the_title($post->ID); ?></div>
                                            <div class="feedback-slider__repair"><?= get_field('status', $post->ID); ?></div>
                                        </div>
                                    </div>
                                    <div class="feedback-slider__desc wow fadeInUp"
                                         data-wow-delay=".<?= $dataWowDelay; ?>s">
                                        <?= get_the_content($post->ID); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $dataWowDelay = $dataWowDelay + 2;
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php wp_reset_postdata(); ?>