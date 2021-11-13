<?php
/**
 * Template Name: Страница: Тип 1
 *
 * @package Dark
 */

?>

<?php get_header() ?>
<div class="container">

    <?php while (have_posts()) {
    the_post(); ?>
        <h1 class="display-1"><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php
} ?>

</div>
<?php get_footer() ?>
