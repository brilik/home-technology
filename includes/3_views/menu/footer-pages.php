<ul class="footer-nav">
    <?php
    $menu = $themeAR->get_items_tree_menu('footer_pages');

    echo '<li class="footer-nav__item">';
    echo '<ul class="footer-inner-nav">';

    if (!empty($menu[0]->childs)): $count = 0;
        foreach ($menu[0]->childs as $item) {
            $title = ($item['title'] !== "#") ? $item['title'] : '';

            if (($count !== 0) && ($count % 4 === 0)) {
                echo '</ul></li><li class="footer-nav__item"><ul class="footer-inner-nav">';
            }

            echo '<li class="footer-inner-nav__item">';
            echo '<a href="' . $item['url'] . '" class="footer-inner-nav__link">' . $title;
            echo '</a></li>';
            $count++;
        }
    endif;

    echo '</ul></li>';
    ?>
</ul>