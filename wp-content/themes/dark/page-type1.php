<?php
/**
 * Template Name: Страница: Тип 2
 *
 * @package Dark
 */

?>

<?php get_header() ?>

<div class="container">
    <div class="row">

        <div class="col-md-2">
            <div class="bg-warning p-3">
                Обществвенный департамент маркетинга и продаж: методология и особенности
            </div>
        </div>
        <div class="col">

            <?php while (have_posts()) {
    the_post(); ?>
        <?php the_content() ?>
        <?php
} ?>
        </div>

    </div>
</div>

<?php get_footer() ?>
