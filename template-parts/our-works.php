<?php 

 if( class_exists( 'Kirki' )): 
    $our_works_section_title = get_theme_mod( 'our_works_section_title' );
    $our_works_section_title_desc = get_theme_mod( 'our_works_section_title_desc' );
    $our_works_galleries = get_theme_mod( 'our_works_gallery' );
?>
<div class="section-padding our-works-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <div class="our-works-title">
                    <h2><?php  echo esc_html($our_works_section_title); ?></h2>
                    <?php echo apply_filters('the_content', $our_works_section_title_desc); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="works-gallery fix">
                    <?php 
                    foreach($our_works_galleries as $our_works_gallery):
                    ?>
                    <div class="single-work-gallery <?php echo esc_attr($our_works_gallery['gallery_custom_class']);?>" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($our_works_gallery['gallery_image'])); ?>'); ">
                        <?php if($our_works_gallery['gallery_hover_title']): ?>
                        <div class="work-gallery-hover">
                            <h2><?php echo esc_html($our_works_gallery['gallery_hover_title']); ?></h2>
                            <?php echo apply_filters('the_content', $our_works_gallery['gallery_hover_description']); ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

                    <?php endif; ?>