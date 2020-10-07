<?php 
    $left_title = get_theme_mod( 'left_title' );
    $contact_facts = get_theme_mod( 'contact_fact' );
    $contact_form_title = get_theme_mod( 'contact_form_title' );
    $contact_form = get_theme_mod( 'contact_form' );

?>

<?php if( class_exists( 'Kirki' )): ?>
<div class="get-in-touch-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
                <div class="fact-area">
                    <h2><?php echo esc_html($left_title); ?></h2>

                    <div class="row">
                        <?php 
                        foreach($contact_facts as $contact_fact):
                        ?>
                        <div class="col-lg-6 col-md-6">
                           <div class="single-fact-item">
                                <img src="<?php echo esc_url(wp_get_attachment_url($contact_fact['fact_icon'])); ?>" alt="">
                            <span class="count"><?php echo esc_html($contact_fact['fact_number']); ?></span>
                            <p><?php echo esc_html($contact_fact['fact_description']); ?></p>
                           </div>
                        </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact-form">
                    <h3 class="text-center"><?php echo esc_html($contact_form_title); ?></h3>
                    <?php echo do_shortcode($contact_form); ?>
                </div>
            </div>
        </div>
    </div>
</div>
                        <?php endif; ?>