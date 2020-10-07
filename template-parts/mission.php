<?php 
    $mission_statement_section_title = get_theme_mod( 'mission_statement_section_title' );
    $mission_statement_description = get_theme_mod( 'mission_statement_description' );
    $mission_statement_btn_text1 = get_theme_mod( 'mission_statement_btn_text1' );
    $mission_statement_btn_link1 = get_theme_mod( 'mission_statement_btn_link1' );
    $mission_statement_btn_text2 = get_theme_mod( 'mission_statement_btn_text2' );
    $mission_statement_btn_link2 = get_theme_mod( 'mission_statement_btn_link2' );

?>

<div class="mission-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h2><?php echo esc_html($mission_statement_section_title); ?></h2>
                <?php echo apply_filters('the_content', $mission_statement_description); ?>

                <div class="mission-link">
                    <a href="<?php echo esc_url($mission_statement_btn_link1); ?>" class="boxed-btn donate-btn"><?php echo esc_html($mission_statement_btn_text1); ?></a>
                    <a href="<?php echo esc_url($mission_statement_btn_link2); ?>" class="boxed-btn contact-btn"><?php echo esc_html($mission_statement_btn_text2); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>