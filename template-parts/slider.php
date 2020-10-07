<?php 
if(class_exists( 'Kirki' )):
$quilt_sliders = get_theme_mod( 'quilt_welcome_slider' ); 
?>

<div class="welcome-slider">

    <?php 
    foreach($quilt_sliders as $quilt_slider):
    ?>

    <div class="single-welcome-slider" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($quilt_slider['slider_bg'])); ?>'); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="single-welcome-slider-text d-table">
                        <div class="d-table-cell">
                            <h3><?php echo esc_html($quilt_slider['slider_sub_title']) ?></h3>
                            <h1><?php echo esc_html($quilt_slider['slider_title']) ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>

</div>
    <?php endif; ?>