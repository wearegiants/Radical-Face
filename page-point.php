<?php Themewrangler::setup_page();get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="poi" style="z-index:999">
<div class="centered-full">
<div class="fs-row">

  <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
  <div id="poi-background" class="fs-cell fs-contained bg--color_black wrapper_shadow">

  <!-- Main Info -->
  <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-contained relative">
  <div class="fluid-video"><?php the_field('videoaudio_embed'); ?></div>
  <div class="wrapper wrapper_extra bg--color_white">
    <h1 id="poi-title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php include locate_template('parts/relationship.php' );?>
  </div>
  </div>

  <!-- Main Info -->
  <div class="fs-cell fs-lg-4 fs-md-6 fs-sm-3 fs-contained relative">
    <div class="wrapper">
      <a href="#" class="close-modal ss-gizmo ss-delete"></a>
      <h3 class="color--white">Listen on Spotify</h3>
      <!-- Spotify Embed -->
      <div class="fluid-video wrapper_shadow"><iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Aspotifydiscover%3Aplaylist%3A1kcD7btDsER1WKH91zDBt4" width="300" height="380" frameborder="0" allowtransparency="true"></iframe></div>
      <!-- Other Buttons -->
      <a href="#" class="wrapper_shadow btn btn--featured ss-gizmo ss-navigateright right"><span>Listen on Apple Music</span></a>
      <a href="#" class="wrapper_shadow btn btn--featured ss-gizmo ss-navigateright right"><span>Purchase Family Portrait</span></a>
    </div>
  </div>

  </div>
  </div>

</div>
</div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>