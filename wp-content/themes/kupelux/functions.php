<?php

//хук добавления поддежки Меню в теме
add_theme_support('menus');

//хук добавления нового типа постов - материалов (из чего делать мебель)
add_action( 'init', 'create_post_type' );

function create_post_type() {

    register_post_type( 'gallery',
        array(
            'labels' => array(
                'name' => __( 'Фото-галерея' ),
                'singular_name' => __( 'Галерея' )
            ),
            'public' => true,
            'can_export' => true,
            'show_ui' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 2,
            'capability_type' => 'post',
            //'rewrite' => array('slug' => 'materials'),
            'taxonomies' => array('category')
        )
    );
    register_taxonomy_for_object_type('post_tag', 'gallery');


    register_post_type( 'materials',
        array(
            'labels' => array(
                'name' => __( 'Материалы' ),
                'singular_name' => __( 'Материал' )
            ),
            'public' => true,
            'can_export' => true,
            'show_ui' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 2,
            'show_in_nav_menus' => true,
            'capability_type' => 'post',
            'taxonomies' => array('category')
        )
    );

    register_taxonomy_for_object_type('post_tag', 'blog');
    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Статьи' ),
                'singular_name' => __( 'Статья' )
            ),
            'public' => true,
            'can_export' => true,
            'show_ui' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 2,
            'capability_type' => 'post',
            'taxonomies' => array('category')
        )
    );
    register_taxonomy_for_object_type('post_tag', 'blog');

}

add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');

//хук добавления поддежки JS плагина Галлерея
function rc_add_rel_attribute($link) {
    global $post;
    return str_replace('<a href', '<a rel="lightgallery[gallery]" href', $link);
}