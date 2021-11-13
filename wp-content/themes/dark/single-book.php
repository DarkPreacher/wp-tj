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
	<header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>') ?>
	</header><!-- .entry-header -->

	<div class="jumbotron">
        <?php
        $readTime = get_post_custom_values('read_time')[0];
        if ($readTime > 0) { ?>
            <dl class="row">
                <dt class="col-sm-3">Прочитать можно за:</dt>
                <dd class="col-sm-9"><?= $readTime ?> час.</dd>
            </dl>
        <?php } ?>
		<?php the_content(); ?>
	</div><!-- .entry-content --><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
<?php
get_footer();
