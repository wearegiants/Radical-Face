<?php Themewrangler::setup_page();get_header(/***Template Name: Splash */); ?>

<?php
  
  $args = array(
    'showposts'  => -1,
    'post_type'  => 'page',
    'paged'      => $paged,
    'post_parent'=> 5,
  );

  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query($args); 
?>

<div class='fs-row map-list'>
  <?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
  <div class="map-list_item fs-cell fs-all-full" style="position:relative">
    <a href="<?php the_permalink(); ?>" class="ajax-point">
      <?php the_title(); ?>
    </a>
    <div class="gps_ring"></div>
  </div>
  <?php 
    endwhile;
    $wp_query = null; 
    $wp_query = $temp;
  ?>
</div>

<div class="map-banner"></div>
<div class="map-bg"></div>

<?php get_footer(); ?>