<?php
$categories = get_categories(array(
    'taxonomy' => 'cat_interior',
    'type' => 'interior',
    'parent' => 0,
    'hide_empty' => 1,
));
?>
<?php ar_the_view("breadcrumbs"); ?>
<?php ar_the_view("page-interior__present", $args); ?>
    <section class="box-style">
        <div class="wrapper">
            <div class="tab-wrap">
                <?php if ($categories): $count = 0; ?>
                    <div class="box-style__top">
                        <div class="box-style__option wow fadeIn">Варианты оформления:</div>
                        <ul class="nav-tab-list tabs">
                            <?php foreach ($categories as $key => $cat): $count = $count + 2; ?>
                                <li class="nav-tab-list__item <?= ($key === 0) ? 'active ' : ''; ?>wow fadeInRight"
                                    data-wow-delay=".<?= $count; ?>s">
                                    <a href="#tab_<?= $key + 1; ?>" class="nav-tab-list__link"><?= $cat->name ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="box-tab-cont">
                        <?php $count = 0; ?>
                        <?php foreach ($categories as $key => $cat): $count = $count + 2; ?>
                            <div class="tab-cont<?= ($key === 0) ? '' : ' hide'; ?>" id="tab_<?= $key + 1; ?>">
                                <?php
                                $categories_2 = get_categories(array(
                                    'taxonomy' => 'cat_interior',
                                    'type' => 'interior',
                                    'child_of' => $cat->cat_ID,
                                    'hide_empty' => 1,
                                ));
                                ?>
                                <?php $count_row = 0; ?>
                                <?php foreach ($categories_2 as $cat2): $count = $count + 2; ?>
                                <?php
                                $mypost = array(
                                    'post_type' => 'interior',
                                    'posts_per_page' => 15,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'cat_interior',
                                            'field' => 'slug',
                                            'terms' => $cat2->slug
                                        ),
                                    ),
                                );
                                $loop = new WP_Query( $mypost );
                                ?>
                                <div class="box-style__row<?= ($count_row++ % 2 === 0) ? '' : ' box-style__row_reverse' ; ?>">
                                    <h2 class="box-style__main-title wow fadeInDown" data-wow-delay=".6s"><?= $cat2->name ?></h2>

                                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                                    <div class="box-style__wrap">
                                        <div class="box-style__info">
                                            <h3 class="box-style__title wow fadeInUp" data-wow-delay=".8s">название
                                                интерьера</h3>
                                            <h4 class="box-style__subtitle wow fadeInUp" data-wow-delay="1s"><?= get_the_title($post->ID); ?></h4>
                                            <p class="box-style__desc wow fadeInUp" data-wow-delay="1.2s"><?= get_the_content($post->ID); ?></p>
                                            <div class="look-wrap">
                                                <a href="<?= get_the_permalink($post->ID); ?>" class="look wow animated fadeInRight" data-wow-delay="1.2s">
                                                    <span class="look__icon"><i class="icon-d"></i></span>
                                                    <span class="look__text">Посмотреть</span>
                                                </a>
                                            </div>
                                        </div>
                                        <?php $slider = get_field('slider',$post->ID); ?>
                                        <?php if( $slider ): $count = 0; ?>
                                        <div class="box-style__slider">
                                            <div class="style-slider js-style-slider">
                                                <?php foreach ( $slider as $item ): $count=$count+2; ?>
                                                <?php $dataWowDelay = ($key < 4) ? 'data-wow-delay=".'.($count+2).'s"' : ''; ?>
                                                <div class="style-slider__item wow fadeInRight"<?= $dataWowDelay; ?>>
                                                    <div class="style-slider__img">
                                                        <img src="<?= $item['url'] ?>" alt="<?= $item['alt'] ?>">
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php ar_the_view("page-interior__discount", $args); ?>