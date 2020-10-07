<?php 

if( class_exists( 'Kirki' )): 
    $story_title = get_theme_mod( 'story_title' ); 
    $story_description = get_theme_mod( 'story_description' ); 
    $story_img = get_theme_mod( 'story_img' ); 
    $story_img_hover_title = get_theme_mod( 'story_img_hover_title' ); 
    $story_img_hover_description = get_theme_mod( 'story_img_hover_description' ); 
    $quilt_story_logos = get_theme_mod( 'quilt_story_logos' ); 

?>
<div class="story-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="story-image" style="background-image: url('<?php echo esc_url($story_img); ?>'); ">
                    <div class="story-hover">
                        <h2><?php echo esc_html($story_img_hover_title); ?></h2>
                         <?php echo apply_filters('the_content', $story_img_hover_description); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="story-content">
                    <h2><?php echo esc_html($story_title); ?></h2>
                    <?php echo apply_filters('the_content', $story_description); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="story-logo-area">
    <div class="container">
        <div class="row">
        <?php 
    foreach($quilt_story_logos as $quilt_story_logo):
    ?>
            <div class="col-lg-4 col-md-4">
                <div class="single-story-logo d-table">
                    <div class="d-table-cell">
                        <img src="<?php echo esc_url(wp_get_attachment_url($quilt_story_logo['story_logo'])); ?>" alt="">
                    </div>
                </div>
            </div>

    <?php endforeach; ?>
        </div>
    </div>
</div>

    <?php endif; ?>