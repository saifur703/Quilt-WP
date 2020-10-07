<?php 
    $project_overview_title = get_theme_mod( 'project_overview_title' ); 
    $project_overview_description = get_theme_mod( 'project_overview_description' ); 
    $project_overview_btn_text = get_theme_mod( 'project_overview_btn_text' ); 
    $project_overview_btn_link = get_theme_mod( 'project_overview_btn_link' ); 
    $project_overview_img = get_theme_mod( 'project_overview_img' ); 
?>
<div class="project-overview-area">
<div class="project-right" style="background-image: url('<?php echo esc_url($project_overview_img); ?>'); "></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="project-overview-text">
                    <h2><?php  echo esc_html($project_overview_title); ?></h2>
                    <?php echo apply_filters('the_content', $project_overview_description); ?>
                    <a class="boxed-btn" href="<?php echo esc_url($project_overview_btn_link); ?>"><?php echo esc_html($project_overview_btn_text); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>