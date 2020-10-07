<?php 

function quilt_theme_setup() {
    load_theme_textdomain('quilt', get_template_directory() . '/languages');

    add_theme_support( 'automatic-feed-links' );

    add_theme_support('title_tag');

    add_theme_support('post_thumbnails');

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    add_theme_support('custom-logo', array(
        'height'        =>  250,
        'width'         =>  250,    
        'flex-width'    =>  true,   
        'flex-height'   =>  true,
    ));
    
    add_theme_support('custom-background', apply_filters(
        'quilt_custom_background', array(
            'default-color' =>  'ffffff',
            'default-image' =>  ''
    ) ) );

    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'quilt_theme_setup');