<?php
global $themeAR;

$themeAR->add_section("header", "Шапка");
$themeAR->add_section("footer", "Подвал");

$themeAR->add_option("header", "header_phone", "Телефон ", "");
$themeAR->add_option("header", "header_social-inst", "Инстаграм ", "");
$themeAR->add_option("header", "header_social-vk", "Вконтакте ", "");
$themeAR->add_option("header", "header_social-fb", "Facebook ", "");
$themeAR->add_option("header", "header_social-twitter", "Twitter ", "");
$themeAR->add_option("header", "header_social-phone", "Viber ", "");
$themeAR->add_option("header", "header_social-ok", "Одноклассники ", "");

$themeAR->add_option("footer", "footer_phone", "Телефон ", "");
$themeAR->add_option("footer", "footer_social-inst", "Инстаграм ", "");
$themeAR->add_option("footer", "footer_social-vk", "Вконтакте ", "");
$themeAR->add_option("footer", "footer_social-fb", "Facebook ", "");
$themeAR->add_option("footer", "footer_social-twitter", "Twitter ", "");
$themeAR->add_option("footer", "footer_social-phone", "Viber ", "");
$themeAR->add_option("footer", "footer_social-ok", "Одноклассники ", "");

register_nav_menus(array(
    'header_main' => esc_html__('Меню в шапке - главное', 'ar-tema'),
    'header_burger' => esc_html__('Меню в шапке - бургер', 'ar-tema'),
    'page_404' => esc_html__('Меню на странице 404', 'ar-tema'),
    'footer_pages' => esc_html__('Меню в подвале - страницы', 'ar-tema'),
//    'footer_socials' => esc_html__('Меню в подвале - социальные', 'ar-tema'),

));