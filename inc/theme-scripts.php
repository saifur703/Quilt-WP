<?php 


function quilt_theme_scripts() {
    wp_enqueue_style('quilt-bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('quilt-font-awesome-css', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('quilt-owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0', 'all');
    wp_enqueue_style('quilt-style', get_stylesheet_uri(), array(), QUILT_VERSION, 'all');
    wp_enqueue_style('quilt-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), QUILT_VERSION, 'all');

    wp_enqueue_style( 'dashicons' );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'quilt-bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), true );
    wp_enqueue_script('quilt-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('quilt-masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('quilt-waypoints-up-js', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('quilt-counter-up-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('quilt-active-js', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'quilt_theme_scripts');

function quilt_classic_editor_styles()
{

    $classic_editor_styles = array(
        '/assets/css/editor-style.css',
    );

    add_editor_style($classic_editor_styles);
}

add_action('init', 'quilt_classic_editor_styles');