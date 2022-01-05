<?php

function hayesvalley_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'hayesvalley_theme_support');

/* Custom Image Sizes */

add_image_size('blog-post', 650, 300);
add_image_size('blog-post-hard-v3', 700, 150, array('left','center'));

/* Display Custom Image Sizes */

add_filter('image_size_names_choose', 'blogger_custom_image_sizes');
function blogger_custom_image_sizes ($sizes) {
    return array_merge($sizes, array(
        'blog-post' => __('Standard'),
        'blog-post-hard-v3' => __('Cropped'),
    ));
}


function hayesvalley_menus() {

    $locations = array(
        'primary' => "top desktop navbar",
        'footer' => "footer navbar"

    );
    register_nav_menus($locations);
}

add_action('init', 'hayesvalley_menus');

/* enque styles */

function hayesvalley_register_styles() {
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('hayesvalley-maarten', get_template_directory_uri('') . "/webflow-hayes-valley-files/css/maarten-proef-project-hayes-valley.webflow.css", array('hayesvalley-webflow'), $version, 'all' );
    wp_enqueue_style('hayesvalley-normalize', get_template_directory_uri('') . "/webflow-hayes-valley-files/css/normalize.css", array(), '1.0', 'all' );
    wp_enqueue_style('hayesvalley-webflow', get_template_directory_uri('') . "/webflow-hayes-valley-files/css/webflow.css", array('hayesvalley-normalize'), '1.0', 'all' );
    wp_enqueue_style('hayesvalley-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '1.3', 'all');
    wp_enqueue_style('hayesvalley-spcial-navstyle', get_template_directory_uri('') . "/webflow-hayes-valley-files/css/specialnavstyle.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'hayesvalley_register_styles');

/* enque scripts*/

function hayesvalley_register_scripts() {
    wp_enqueue_script('hayesvalley-jquery', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=613e05dae34aaf84158b4835', array(), '3.5.1', true);
    wp_enqueue_script('hayesvalley-webflow', get_template_directory_uri('') . "/webflow-hayes-valley-files/js/webflow.js", array('hayesvalley-jquery'), '1.4', true);
    wp_enqueue_script('hayesvalley-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);

}

add_action('wp_enqueue_scripts', 'hayesvalley_register_scripts');


// add a new product as a post_type Cars

/*

function my_first_post_type(){

    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car'
        
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu-icon' => 'dashicons-car',
        'supports' => array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats'),

    );

    register_post_type('cars', $args);

}
    
add_action('init', 'my_first_post_type');

*/

function my_first_post_type(){

    $args = array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project'
        
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats'),

    );

    register_post_type('projects', $args);

}
    
add_action('init', 'my_first_post_type');

// add taxonomy to the new product Cars

function my_first_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Types',
            'singular_name' => 'Type'
        
        ),
        'public' => true,
        'hierarchical' => false
    
    );

    register_taxonomy('types', array('projects'), $args);
}

add_action('init', 'my_first_taxonomy');




?>