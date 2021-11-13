<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dark
 */

get_header();
?>
<div class="container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title('<h1 class="display-2">', '</h1>') ?>
    <div class="lead">
        <?php the_content() ?>
    </div>
</article>
</div>
<?php get_footer();
