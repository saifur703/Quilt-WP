<?php 
    $footer_logo = get_theme_mod( 'footer_logo' );
    $footer_copyright = get_theme_mod( 'footer_copyright' );
    $social_links = get_theme_mod( 'social_links' );
    $footer_contact_title = get_theme_mod( 'footer_contact_title' );
    $footer_contact_text = get_theme_mod( 'footer_contact_text' );
    $footer_telephone = get_theme_mod( 'footer_telephone' );
?>
<?php if( class_exists( 'Kirki' )): ?>
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="footer-left">
                    <img src="<?php echo esc_url($footer_logo); ?>" alt="">
                <?php echo apply_filters('the_content', $footer_copyright); ?>
                </div>
                <div class="social-links">
                    <ul>
                        <?php foreach($social_links as $social_link): ?>
                            <?php if($social_link['facebook']): ?>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>

                            <?php if($social_link['twitter']): ?>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <?php endif; ?>

                            <?php if($social_link['linkedin']): ?>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <?php endif; ?>

                            <?php if($social_link['instagram']): ?>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <?php endif; ?>
                        
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2">
                <div class="quick-links">
                    <h4>
                        <?php 
                        echo wp_get_nav_menu_name("footer1" ); 
                        ?>
                    </h4>
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'    =>  'footer1',
                            'container'=>   ' '
                        ));
                        ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="quick-links">
                    <h4>
                        &nbsp;
                    </h4>
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'    =>  'footer2',
                            'container'=>   ' '
                        ));
                        ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="footer-contact">
                    <h4><?php echo esc_html($footer_contact_title); ?></h4>
                    <?php echo apply_filters('the_content', $footer_contact_text); ?>
                    <?php if($footer_telephone): ?>
                        <div class="footer-tel">
                            <i class="fa fa-phone"></i><a href="tel:<?php echo esc_attr($footer_telephone);?>"><?php echo esc_html($footer_telephone); ?></a>
                        </div>
                        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
                    <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>