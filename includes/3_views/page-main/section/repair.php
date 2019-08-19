<section class="box-repair">
    <div class="wrapper">
        <div class="box-repair__img wow fadeInLeft">
            <img src="<?= $args['image']['url']; ?>" alt="">
        </div>
        <div class="box-repair__wrap">
            <h3 class="box-repair__title<?= ($args['big-title']) ? '' : ' title'; ?> wow fadeInLeft"><?= $args['title']; ?></h3>
            <div class="box-repair__btn">
                <a href="<?= $args['btn-url']; ?>#" class="btn btn-fill wow fadeInRight"
                   data-link="<?= $args['btn-name']; ?>">
                    <span><?= $args['btn-name']; ?></span>
                </a>
            </div>
        </div>
    </div>
</section>