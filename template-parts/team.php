<?php 
    $team_section_title = get_theme_mod( 'team_section_title' );
    $quilt_teams = get_theme_mod( 'single_team' );

?>

<?php if( class_exists( 'Kirki' )): ?>
<div class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <div class="team-section-title">
                    <h2><?php echo esc_html($team_section_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            foreach($quilt_teams as $single_team):
            ?>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="single-team-item">
                    <img src="<?php echo esc_url(wp_get_attachment_url($single_team['image'])); ?>" alt="">
                    <h4><?php echo esc_html($single_team['name']); ?></h4>
                </div>
            </div>

             <?php endforeach; ?>
        </div>
    </div>
</div>
            <?php endif; ?>