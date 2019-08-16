<ul class="error-list">
    <?php
    $menu = $themeAR->get_items_tree_menu('page_404');
    $count = 0;
    $dataWowDelayStartSec = 3;

    foreach ($menu[0]->childs as $item) {
        $count++;
        $title = ($item['title'] !== "#") ? $item['title'] : '';

        echo '<li class="error-list__item wow fadeInLeft" data-wow-delay=".' . ($dataWowDelayStartSec + $count) . 's">';
        echo '<a href="' . $item['url'] . '" class="error-list__link">' . $title;
        echo '</a></li>';
    }
    ?>
</ul>