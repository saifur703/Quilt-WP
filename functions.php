<?php 

if(site_url() == "http://localhost/project_quilt") {
    define("QUILT_VERSION", time() );
} else {
    define("QUILT_VERSION", wp_get_theme() -> get("Version") );
}

require_once get_template_directory() . '/inc/tgm.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/theme-scripts.php';
require_once get_template_directory() . '/inc/theme-menus.php';
