<?php
/**
 * Dark functions and definitions
 *
 * @package Dark
 */
define('DISALLOW_FILE_EDIT', true);

register_nav_menus(array(
    'header-menu' => 'Header menu',
    'side-menu'   => 'Side menu',
));

function dark_theme_assets()
{
    show_admin_bar(false);
    wp_dequeue_style('styles-theme', get_template_directory_uri() . '/style.css', '', '1.0');
    wp_enqueue_style('styles-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', '', '4.6.1');

    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'dark_theme_assets');

function dark_cpt_book_init()
{
    $labels = array(
        'name'                  => 'Книги',
        'singular_name'         => 'Книга',
        'menu_name'             => 'Книги',
        'name_admin_bar'        => 'Книга',
        'add_new'               => 'Добавить',
        'add_new_item'          => 'Добавить новую книгу',
        'new_item'              => 'Новая книга',
        'edit_item'             => 'Редактирование книги',
        'view_item'             => 'Просмотр книги',
        'all_items'             => 'Все книги',
        'search_items'          => 'Поиск книг',
        'parent_item_colon'     => 'Родительские книги:',
        'not_found'             => 'Книги не найдены.',
        'not_found_in_trash'    => 'В корзине книги не найдены. И это хорошо, нельзя книги выбрасывать',
        'archives'              => 'Книжный архив',
        'insert_into_item'      => 'Добавить к книге',
        'uploaded_to_this_item' => 'Загружено в эту книгу',
        'filter_items_list'     => 'Фильтр списка книг',
        'items_list_navigation' => 'Навигация по списку книг',
        'items_list'            => 'Список книг',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book',
        'supports'           => array( 'title', 'editor', 'author', 'custom-fields' ),
    );

    register_post_type('book', $args);
}

add_action('init', 'dark_cpt_book_init');


function dark_add_cpc_book($columns)
{
    unset($columns['author']);
    unset($columns['date']);

    return array_merge(
        $columns,
        [
            'read_time' => 'Время чтения',
            'cf_order'  => 'Порядок',
        ]
    );
}

add_filter('manage_book_posts_columns', 'dark_add_cpc_book');


function book_custom_column($column, $post_id)
{
    switch ($column) {
        case 'read_time':
            $value = get_post_meta($post_id, 'read_time', true);
            if ($value != '') {
                echo $value . ' час.';
            }
        break;
        case 'cf_order':
            $value = get_post_meta($post_id, 'cf_order', true);
            if ($value != '') {
                echo (int) $value;
            }
        break;
    }
}
add_action('manage_book_posts_custom_column', 'book_custom_column', 10, 2);
