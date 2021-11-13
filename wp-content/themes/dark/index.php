<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dark
 */

get_header();
?>
<div class="container">
    <div class="row">
    <div class="col">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <div class="mb-3">
                    <h2 class="text-primary"><?= get_the_title() ?></h2>
                    <p><?= get_the_excerpt() ?></p>
                    <a href="<?= get_the_permalink() ?>" class="btn btn-primary">Почитать &rarr;</a>
                </div>


            <?php
            }

            the_posts_navigation();
        } else {
            echo 'Упс';
        }
        ?>
        </div>

        <div class="col-md-3">
            <?php get_sidebar() ?>
        </div>
    </div>
</div>

<?php get_footer();
