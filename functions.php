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

function process_contact_form_data() {
    // Проверяем, была ли отправлена форма и соответствует ли действие
    if (isset($_POST['action']) && $_POST['action'] == 'submit_contact_form') {
        // Получаем и проверяем данные из формы
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // Проверка наличия обязательных полей
        if (empty($name) || empty($email) || empty($message)) {
            wp_die('Please fill in all required fields.');
        }

        // Проверка правильного формата email
        if (!is_email($email)) {
            wp_die('Invalid email address.');
        }

        // Если данные прошли проверку, можно выполнять необходимые действия
        // Например, отправка email или сохранение данных в базу данных

        // Пример отправки email с помощью функции wp_mail (требуется настройка SMTP)
        $to = 'tudya238@gmail.com'; // Замените на свой email
        $subject = 'Contact Form Submission';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $body = "Name: $name<br>Email: $email<br>Message: $message";

        // Отправка email
        if (wp_mail($to, $subject, $body, $headers)) {
            // Email успешно отправлен
            // Можно выполнить дополнительные действия, например, перенаправление на другую страницу
            wp_redirect(home_url('/'));
            exit;
        } else {
            $file = fopen('email_log.txt', 'a');
            fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n\n");
            fclose($file);
            // Произошла ошибка при отправке email
            wp_die('Error sending email.');
        }
    }
}
add_action('admin_post_submit_contact_form', 'process_contact_form_data');
add_action('admin_post_nopriv_submit_contact_form', 'process_contact_form_data');


function custom_newsletter_form_shortcode($atts) {
    ob_start();
    include get_template_directory() . '/custom-newsletter-form.php';
    return ob_get_clean();
}
add_shortcode('custom-form', 'custom_newsletter_form_shortcode');



?>


