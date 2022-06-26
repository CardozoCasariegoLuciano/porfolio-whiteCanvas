<?php

function themeSupport(){
    //Setting lang folder
    load_theme_textdomain("test-wordpress", get_template_directory().'/lagn');

    //Setting post image feature
    add_theme_support('post-thumbnails');

    //Setting menus locations
    register_nav_menus(
        array(
            'main-menu' => 'Menu Primario'
        )
    );
}
add_action('after_setup_theme','themeSupport');

function scripts(){
    //Deleting unused styles
    wp_dequeue_style('wp-block-library');

    //Add styles
    wp_enqueue_style(
        'theme-styles',
        get_theme_file_uri('/assets/styles.css'),
        null,
        filemtime(get_template_directory().'/assets/styles.css')
    );

    //Add scripts
    wp_enqueue_script(
        'theme-scripts',
        get_theme_file_uri('/assets/main.js'),
        null,
        filemtime(get_template_directory().'/assets/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'scripts');


function custom_post_type(){

    //register Work post type
    register_post_type(
        'works',
        array(
            'labels' => array(
                'name' => 'Works',
                'singular_name' => 'Work',
                'add_new' => 'Add new Work',
                'search_items' => 'Search works',
                'add_new_item' => 'Add new Work',
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
            'menu_icon' => 'dashicons-hammer',
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'works',
                'with_front' => false,
            ),
            'taxonomies' => array('category'),
        ));

    //register Language post type
    register_post_type(
        'languages',
        array(
            'labels' => array(
                'name' => 'Languages',
                'singular_name' => 'Language',
                'add_new' => 'Add new Language',
                'add_new_item' => 'Add new Language',
                'search_items' => 'Search languages',
            ),
            'public' => true,
            'supports' => array('title','thumbnail', 'revisions', 'custom-fields'),
            'menu_icon' => 'dashicons-flag',
            'rewrite' => array(
                'slug' => 'languages',
                'with_front' => false,
            )
        ));

    //register Tech post type
    register_post_type(
        'tech',
        array(
            'labels' => array(
                'name' => 'Tech',
                'singular_name' => 'Tech',
                'add_new' => 'Add new Tech',
                'add_new_item' => 'Add new Tech',
                'search_items' => 'Search Techs',
            ),
            'public' => true,
            'supports' => array('title','thumbnail', 'revisions', 'custom-fields'),
            'menu_icon' => 'dashicons-welcome-learn-more',
            'rewrite' => array(
                'slug' => 'tech',
                'with_front' => false,
            )
        ));

    //register about post type
    register_post_type(
        'about',
        array(
            'labels' => array(
                'name' => 'About',
                'singular_name' => 'About',
                'add_new' => 'Add new data',
                'add_new_item' => 'Add new About',
                'search_items' => 'Search',
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
            'menu_icon' => 'dashicons-clipboard',
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'about',
                'with_front' => false,
            ),
            'taxonomies' => array('category'),
        ));
}

add_action('init', 'custom_post_type');


function remove_default_post_type() {
    // Remove Post admin menu
    remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_comments() {
    // Remove Coments from admin menu
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_comments' );

?>
