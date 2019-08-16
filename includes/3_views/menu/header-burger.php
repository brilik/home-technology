<ul class="header-menu-list">
    <?php
    $menu = $themeAR->get_items_tree_menu('header_burger');
    $menuMob = $themeAR->get_items_tree_menu('header_main');

    foreach ($menu[0]->childs as $item) {
        $title = ($item['title'] !== "#") ? $item['title'] : '';

        echo '<li class="header-menu-list__item">';
        echo '<a href="' . $item['url'] . '" class="header-menu-list__link">' . $title;
        echo '<div class="header-menu-list__img">';
        echo '<img src="'.get_template_directory_uri().'/assets/img/menu-hover.jpg" alt="">';
        echo '</div></a></li>';
    }
    foreach ($menuMob[0]->childs as $item) {
        $title = ($item['title'] !== "#") ? $item['title'] : '';

        echo '<li class="header-menu-list__item show-tab">';
        echo '<a href="' . $item['url'] . '" class="header-menu-list__link">' . $title;
        echo '</a></li>';
    }

    ?>
</ul>