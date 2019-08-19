<?php

function includes_full_files($dir)
{
    foreach (glob($dir . '/*.php') as $file) {
        include_once $file;
    }
}


$include_path = get_template_directory() . '/includes';
define("VIEWS_DIR", $include_path . "/3_views/");
$debugAR = $themeAR = false;
$elementorWidgetsAR = [];


add_action('init', 'ar_theme_init', 10);
function ar_theme_init()
{
    global $include_path, $themeAR, $debugAR;
    include_once $include_path . "/theme_functions.php";
    includes_full_files($include_path . "/4_classes");
    $themeAR = new ThemeAR();
    $debugAR = new DebugAR();
    include_once $include_path . "/useractions.php";
}


add_action('wp_enqueue_scripts', 'ar_theme_name_scripts', 100);
function ar_theme_name_scripts()
{
    wp_deregister_script('jquery');
    wp_deregister_style('elementor-animations');
    wp_deregister_style('elementor-frontend');
    wp_deregister_style('elementor-global');
    wp_deregister_style('elementor-common');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array(), null, false);

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), null);

    wp_enqueue_script('jquery');
    wp_enqueue_script('domtech-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.4.1.min.js', array('jquery'), null, true);
    wp_enqueue_script('domtech-jquery-fancybox', get_template_directory_uri() . '/assets/js/components/jquery.fancybox.min.js', array(), null, true);
    if( is_404() ) {
        wp_enqueue_script('domtech-jquery-barrating', get_template_directory_uri() . '/assets/js/components/jquery.barrating.min.js', array(), null, true);
    }
    wp_enqueue_script('domtech-mask', get_template_directory_uri() . '/assets/js/components/mask.js', array(), null, true);
    wp_enqueue_script('domtech-wow', get_template_directory_uri() . '/assets/js/components/wow.min.js', array(), null, true);
    wp_enqueue_script('domtech-slick', get_template_directory_uri() . '/assets/js/components/slick.min.js', array(), null, true);
    wp_enqueue_script('domtech-datepicker', get_template_directory_uri() . '/assets/js/components/datepicker.min.js', array(), null, true);
    wp_enqueue_script('domtech-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true);
}


//Подлючаем svg файлы
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}