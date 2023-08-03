<?php

function myTemplate_assets()
{
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/styles.css');

    wp_enqueue_style('normalizecss', get_template_directory_uri() . '/assets/css/normalize.css');

    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true);
}

add_action('wp_enqueue_scripts', 'myTemplate_assets');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails', array('about'));

add_theme_support( 'menus' );
?>


