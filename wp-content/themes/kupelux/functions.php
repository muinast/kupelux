<?php

//хук добавления нового типа постов - материалов (из чего делать мебель)
add_action( 'init', 'create_post_type' );
function create_post_type() {
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
            'capability_type' => 'post',
            //'rewrite' => array('slug' => 'materials'),
            'taxonomies' => array('category')
        )
    );
    register_taxonomy_for_object_type('post_tag', 'materials');
}

register_nav_menus();