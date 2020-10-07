<?php 

function quilt_menus()
{
    $locations = array(
        'primary'   =>  __('Main Menu', 'philosophy'),
        'footer1'   =>  __('Footer Menu 1', 'philosophy'),
        'footer2'   =>  __('Footer Menu 2', 'philosophy'),
    );

    register_nav_menus($locations);
}
add_action('init', 'quilt_menus');