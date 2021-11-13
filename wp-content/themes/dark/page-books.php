<?php
/**
 * Template Name: Страница: Книги
 *
 * @package Dark
 */
$wp_query  = new WP_Query();
$books = $wp_query->query([
    'post_type'      => 'book',
    'posts_per_page' => '-1',
    'post_status'    => 'publish',
    'orderby'        => 'meta_value',
    'meta_query'     => array(
        array('key' => 'cf_order')
    ),
    'order'          => 'ASC'
]);
?>

<?php get_header() ?>

    <div class="container">
    <?php foreach ($books as $book) {
    the_post(); ?>
        <div class="card border-primary mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= get_the_title() ?></h5>
                <p class="card-text"><?= get_the_excerpt() ?></p>
                <a href="<?= get_the_permalink() ?>" class="btn btn-primary">Почитать</a>
            </div>
        </div>
    <?php
} ?>
    </div>

<?php get_footer() ?>
