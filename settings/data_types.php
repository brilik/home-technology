<?php

global $themeAR;

$themeAR->create_post_type("Отзывы", "feedback", true, array('title', 'editor', 'thumbnail'));
$themeAR->create_post_type("Интерьер", "interior", true, array('title', 'editor', 'thumbnail'));
$themeAR->create_taxonomy("Категория", "cat_interior", ["interior"], false);