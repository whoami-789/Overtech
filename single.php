<?php
$post = $wp_query->post;

// Проверяем тип поста и выбираем соответствующий шаблон
if (in_category('4')) {
    // Используем шаблон для пользовательского типа записей "Проекты"
    //get_template_part('single', 'blog');
    include(TEMPLATEPATH . '/single-blog.php');
} elseif (in_category('3')) {
    // Используем шаблон для рубрики "Технологии"
    include(TEMPLATEPATH . '/single-bootcamp.php');


}
?>