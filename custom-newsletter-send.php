<?php
if (isset($_POST['send_news'])) {
    $news_content = sanitize_text_field($_POST['news_content']);

    // Получите список email подписчиков из базы данных (замените "subscribers_table" на фактическое имя таблицы)
    $subscribers = get_subscribers_from_database();

    // Отправка новостей каждому подписчику
    foreach ($subscribers as $subscriber) {
        $to = $subscriber->email;
        $subject = "Важные новости от нашего сайта";
        $message = $news_content;

        // Отправка email
        wp_mail($to, $subject, $message);
    }
}
?>
<form action="" method="post">
    <label for="news_content">Введите текст новости:</label>
    <textarea name="news_content" id="news_content" required></textarea>
    <button type="submit" name="send_news">Отправить новости</button>
</form>
