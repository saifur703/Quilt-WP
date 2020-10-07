<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <?php wp_body_open(); ?>

    
<?php 

$quilt_header_btn_text = get_theme_mod( 'quilt_header_btn_text'); 
$quilt_header_btn_link = get_theme_mod( 'quilt_header_btn_link'); 
$quilt_header_btn_target = get_theme_mod( 'quilt_header_btn_target'); 
?>


<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="logo">
                    <?php if (has_custom_logo()) { ?>
                    <a class="logo" href="<?php echo site_url(); ?>">
                        <?php the_custom_logo(); ?>
                    </a>
                    <?php } else { ?>
                    <h1><a href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?></a></h1>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 text-right">
               <div class="header-right">
                   <?php if( class_exists( 'Kirki' )): ?>
                    <a class="boxed-btn" target="<?php echo esc_attr($quilt_header_btn_target); ?>" href="<?php echo esc_url($quilt_header_btn_link); ?>"><?php echo esc_html($quilt_header_btn_text); ?>
                    </a>
                   <?php endif; ?>
                   
                    <div class="main-menu">
                        <?php 
                        wp_nav_menu(array(
                            'theme_location'    =>  'primary',
                            'container'=>   ' '
                        ));
                        ?>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>