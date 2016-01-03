<?php Themewrangler::setup_page();get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="content">
  <div class="fs-row">
    <div class="fs-cell fs-all-half fs-centered">
      <div class="wrapper bg--color_white">
        <h3 class="color-white"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php include locate_template('parts/relationship.php' );?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>