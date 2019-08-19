<section class="box-materials">
    <div class="wrapper">
        <h2 class="box-materials__title title wow fadeIn"><?= $args['title']; ?></h2>
    </div>
    <div class="tab-wrap">
        <div class="wrapper">
            <ul class="nav-tab-list tabs wow fadeIn" data-wow-delay=".3s">
                <li class="nav-tab-list__item active">
                    <a href="#tab_1" class="nav-tab-list__link"><?= $args['title_tab_1']; ?></a>
                </li>
                <li class="nav-tab-list__item">
                    <a href="#tab_2" class="nav-tab-list__link"><?= $args['title_tab_2']; ?></a>
                </li>
            </ul>
        </div>
        <div class="box-tab-cont wow fadeIn">
            <div class="tab-cont" id="tab_1">
                <div class="wrapper">
                    <div class="materials-list-wrap">
                        <?php if ($args['items_tab_1']): $count = 10; ?>
                            <ul class="materials-list">
                                <?php foreach ($args['items_tab_1'] as $item): $count--; ?>
                                    <li class="materials-list__item wow fadeInRight" data-wow-delay=".<?= $count; ?>s">
                                        <div class="materials-list__icon">
                                            <i class="icon-materials-<?= ++$item['icon']; ?>"></i>
                                        </div>
                                        <h4 class="materials-list__title"><?= $item['title']; ?></h4>
                                        <div class="materials-list__desc"><?= $item['desc']; ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="tab-cont hide" id="tab_2">
                <div class="wrapper">
                    <div class="materials-list-wrap">
                        <?php if ($args['items_tab_1']): ?>
                            <ul class="materials-list">
                                <?php foreach ($args['items_tab_2'] as $item): ?>
                                    <li class="materials-list__item">
                                        <div class="materials-list__icon">
                                            <i class="icon-materials-<?= ++$item['icon']; ?>"></i>
                                        </div>
                                        <h4 class="materials-list__title"><?= $item['title']; ?></h4>
                                        <div class="materials-list__desc"><?= $item['desc']; ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
