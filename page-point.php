<?php Themewrangler::setup_page();get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="content">
  <div class="fs-row point-screen_content">
    <div class="fs-cell fs-xl-6 fs-lg-6 fs-md-5 fs-sm-3 fs-right">
      <div id="content-box">
        <a href="#" class="ss-gizmo ss-delete"></a>
        <div class="wrapper wrapper-main bg--color_brown">
          <h1 class="color-white"><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <?php if(get_field('videoaudio_embed')): ?>
          <hr class="invisible compact">
          <div class="fluid-video"><?php the_field('videoaudio_embed'); ?></div>
          <?php endif; ?>
        </div>
        <?php include locate_template('parts/relationship.php' );?>
      </div>
    </div>
  </div>
  <?php if('background_image'): ?>
  <div class="point-screen">
    <div class="point-screen_points"></div>
    <div class="point-screen_map" style="background-image:url('<?php the_field('background_image'); ?>');"></div>
  </div>
  <?php endif; ?>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>