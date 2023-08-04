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

function process_form_data() {
    if ( isset( $_POST['action'] ) && $_POST['action'] == 'submit_form' ) {
        $name = sanitize_text_field( $_POST['name'] );
        $email = sanitize_email( $_POST['email'] );
        $message = sanitize_textarea_field( $_POST['message'] );

        // Добавьте здесь код для сохранения данных в базу данных или отправки на почту
    }
}
add_action('admin_post_submit_form', 'process_form_data');
add_action('admin_post_nopriv_submit_form', 'process_form_data');
?>


