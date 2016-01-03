<?php Themewrangler::setup_page();get_header('splash' /***Template Name: UI Elements */); ?>

<div id="splash">
  <div id="splash--centered">
    <div class="fs-row">
      <div class="fs-cell fs-lg-5 fs-md-4 fs-sm-3 fs-centered text-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); } ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer('splash'); ?>