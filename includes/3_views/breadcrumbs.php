<?php
function the_breadcrumb()
{
    global $post;
    if (!is_home()) {
        echo '<li class="breadcrumbs-list__item">';
        echo '<a href="' . site_url() . '" class="breadcrumbs-list__link">Главная</a>';
        echo '</li>';
        if (is_single()) { // записи
            the_category(', ');
            echo '<li class="breadcrumbs-list__item">';
            the_title();
            echo '</li>';
        } elseif (is_page()) { // страницы
            if ($post->post_parent) {
                $parent_id = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_post($parent_id);
                    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) echo $crumb;
            }
            echo '<li class="breadcrumbs-list__item">';
            echo the_title();
            echo '</li>';
        } elseif (is_category()) { // категории
            global $wp_query;
            $obj_cat = $wp_query->get_queried_object();
            $current_cat = $obj_cat->term_id;
            $current_cat = get_category($current_cat);
            $parent_cat = get_category($current_cat->parent);
            if ($current_cat->parent != 0) {
                echo(get_category_parents($parent_cat, TRUE, ''));
            }
            single_cat_title();
        } elseif (is_search()) { // страницы поиска
            echo 'Результаты поиска для "' . get_search_query() . '"';
        } elseif (is_tag()) { // теги (метки)
            echo single_tag_title('', false);
        } elseif (is_day()) { // архивы (по дням)
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>';
            echo get_the_time('d');
        } elseif (is_month()) { // архивы (по месяцам)
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>';
            echo get_the_time('F');
        } elseif (is_year()) { // архивы (по годам)
            echo get_the_time('Y');
        } elseif (is_author()) { // авторы
            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;
        } elseif (is_404()) { // если страницы не существует
            echo 'Ошибка 404';
        }

        if (get_query_var('paged')) // номер текущей страницы
            echo ' (' . get_query_var('paged') . '-я страница)';

    } else { // главная
        $pageNum = (get_query_var('paged')) ? get_query_var('paged') : 1;
        if ($pageNum > 1) {
            echo '<li class="breadcrumbs-list__item">';
            echo '<a href="' . site_url() . '" class="breadcrumbs-list__link">Главная</a>' . $pageNum . '-я страница';
            echo '</li>';
        } else {
            echo 'Вы находитесь на главной странице';
        }
    }
}

?>
<div class="wrapper">
    <div class="breadcrumbs-list-wrap">
        <ul class="breadcrumbs-list wow fadeInLeft">
            <?php the_breadcrumb(); ?>
            <!--            <li class="breadcrumbs-list__item">-->
            <!--                <a href="#" class="breadcrumbs-list__link">Главная</a>-->
            <!--            </li>-->
            <!--            <li class="breadcrumbs-list__item">-->
            <!--                <a href="#" class="breadcrumbs-list__link">Готовые интерьеры</a>-->
            <!--            </li>-->
            <!--            <li class="breadcrumbs-list__item">Скандинавский дизайн интерьера в песочных оттенках</li>-->
        </ul>
    </div>
</div>