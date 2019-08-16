<ul class="header-list">
    <?php
    $menu = $themeAR->get_items_tree_menu('header_main');

    foreach ($menu[0]->childs as $item) {
        $title = ($item['title'] !== "#") ? $item['title'] : '';

        echo '<li class="header-list__item">';
        echo '<a href="' . $item['url'] . '" class="header-list__link">' . $title;
        echo '</a></li>';
    }
    ?>
</ul>