<?php 

$intro_text = get_theme_mod( 'intro_text' ); 
?>
<div class="intro-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <?php if( class_exists( 'Kirki' )): ?>
                <div class="intro-text">
                    <?php echo apply_filters('the_content', $intro_text); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>