<?php Themewrangler::setup_page();get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="content">
  <div class="fs-row">
    <div class="fs-cell fs-xl-7 fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
      <div id="content-box">
        <div class="wrapper wrapper-main bg--color_brown">
          <h3 class="color-white"><?php the_title(); ?></h3>
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
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>