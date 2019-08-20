<section class="box-discount">
    <div class="box-discount__wrap"
         style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/interior/discount-bg.jpg);">
        <div class="box-discount__value wow fadeInLeft"><?= $args['number_discount']; ?><sup>
                <small>%</small>
            </sup></div>
        <h3 class="box-discount__title wow fadeInRight"><?= $args['title_discount']; ?></h3>
    </div>
</section>