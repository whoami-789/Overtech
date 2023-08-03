<?php
/*
Template Name: Custom Travel Category Template
*/
get_header();
?>

<div class="category-header">
    <h1><?php single_cat_title(); ?></h1>
</div>

<div class="category-posts">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <div class="post">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php
        endwhile;
    endif;
    ?>
</div>

<?php
get_footer();
?>
