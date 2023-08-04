<?php
// Load WordPress environment
require_once(dirname(__FILE__) . '/wp-load.php');

// Проверка наличия данных в запросе
if (isset($_POST['action']) && $_POST['action'] == 'submit_form') {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Выполнение необходимых действий с данными, например, сохранение в базу данных или отправка на почту

    // После обработки данных можно выполнить перенаправление на другую страницу
    // Это поможет избежать повторной отправки формы при обновлении страницы
    wp_redirect(home_url('/thank-you/'));
    exit;
} else {
    // Возможно, здесь будет обработка других запросов
}
