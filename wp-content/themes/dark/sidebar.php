<?php
/**
 * The sidebar for books
 *
 * @package Dark
 */
$wp_query  = new WP_Query();
$books = $wp_query->query([
    'post_type'      => 'book',
    'posts_per_page' => '2',
    'post_status'    => 'publish',
    'orderby'        => 'meta_value',
    'meta_query'     => array(
        array('key' => 'cf_order')
    ),
    'order'          => 'DESC'
]);
?>

<aside id="secondary" class="widget-area">
    <div class="card">
        <div class="card-header">Последние книги</div>
        <ul class="list-group list-group-flush">
        <?php foreach ($books as $book) {
    the_post(); ?>
        <li class="list-group-item"><a href="<?= get_the_permalink() ?>" class="card-link"><?= get_the_title() ?></a></li>
        <?php
} ?>
        </ul>
        <div class="card-footer text-muted">
            <a href="<?= get_the_permalink(28) ?>" class="card-link">Все книги</a>
        </div>
    </div>
</aside>
