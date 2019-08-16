<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); echo ';'; bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <link rel="icon" type="image/x-icon" href="<?=get_template_directory_uri();?>/favicon.ico" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('loaded') ?>>
<div class="icon-load">
    <div class="icon-load__logo">
        <img src="<?=get_template_directory_uri();?>/assets/img/logo.svg" alt="">
    </div>
    <div class="icon-load__line">
        <div class="icon-load__line-progress"></div>
    </div>
</div>
<!-- BEGIN BODY -->
<div class="main-wrapper">
    <!-- BEGIN CONTENT -->
    <main class="content">
