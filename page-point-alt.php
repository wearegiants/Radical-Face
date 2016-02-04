<?php Themewrangler::setup_page();get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="poi" style="z-index:999">
  <div class="centered-full">
    <div class="fs-row">
      <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-centered">
        <div id="poi-background" class="fs-cell fs-contained bg--color_black wrapper_shadow">
          <!-- Main Info -->
          <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-contained relative">
            <a href="#" class="close-modal ss-gizmo ss-delete"></a>
            <div class="fluid-video"><?php the_field('videoaudio_embed'); ?></div>
            <div class="wrapper poi_content wrapper_extra bg--color_black">
              <h1 id="poi-title"><?php the_title(); ?></h1>
              <?php the_content(); ?>
              <?php // include locate_template('parts/relationship.php' );?>
            </div>
          </div>

          <!-- Main Info -->
          <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-contained relative">
            <div class="wrapper">
              <div class="fs-row">
                <div class="fs-cell fs-lg-4 fs-md-3 fs-sm-3">
                  <h3 class="color--white">Listen Now</h3>
                  <div class="bg--color_black wrapper_shadow">

                    <div class="fluid-video"><?php the_field('spotify'); ?></div>
                  </div>
                </div>

                <div class="fs-cell fs-lg-8 fs-md-3 fs-sm-3">
                  <h3 class="color--white">&nbsp;</h3>
                  <span href="#" class="wrapper_shadow btn btn--featured">
                  <span>Listen Now</span>
                    <?php if (get_field('apple_music')): ?><a target="_blank" href="<?php the_field('buy_link'); ?>" class="ss-icon ss-social-circle ss-appleinc"></a><?php endif; ?>
                    <?php if (get_field('sound_cloud')): ?><a target="_blank" href="<?php the_field('buy_link'); ?>" class="ss-icon ss-social-circle ss-soundcloud"></a><?php endif; ?>
                    <?php if (get_field('youtube')): ?>    <a target="_blank" href="<?php the_field('buy_link'); ?>" class="ss-icon ss-social-circle ss-youtube"></a><?php endif; ?>
                  </span>
                  
                  <a target="_blank" href="<?php the_field('buy_link'); ?>" class="wrapper_shadow btn btn--featured ss-gizmo ss-navigateright right"><span>Buy: <?php the_title(); ?></span></a>
                  <a target="_blank" href="https://muut.com/radicalfaceforum" class="wrapper_shadow btn btn--featured ss-gizmo ss-navigateright right"><span>Join the discussion!</span></a>
                </div>
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>