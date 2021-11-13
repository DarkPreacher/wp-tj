<?php
/**
 * The header
 *
 * @package Dark
 */

?>
<!doctype html>
<html class="h-100" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
        main > .container {
            padding: 60px 15px 0;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>
<header>
    <nav id="site-navigation" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <ul class="navbar-nav mr-auto">
        <?php $menu = wp_get_nav_menu_items('header-menu');
            foreach ($menu as $item) { ?>
                <li class="nav-item"><a class="nav-link" href="<?= $item->url ?>"><?= $item->title ?></a></li>
                <?php
            }
        ?>
        </ul>
    </nav><!-- #site-navigation -->
</header>

<main class="flex-shrink-0">
