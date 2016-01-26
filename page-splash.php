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

<div class="map-list_wrap">
<div class='map-list'>
  <div class="map-list_wrapper">
  <?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
  <div <?php post_class('map-list_item'); ?> style="left:<?php the_field('x_position'); ?>%; top: <?php the_field('y_position'); ?>%">
    <a href="<?php the_permalink(); ?>" class="map-list_item__point ajax-point">
      <span class="title">
        <span class="title-main"><?php the_title(); ?></span>
        
        <?php if(get_field('subtitle')): ?>
        <span class="title-sub"><?php the_field('subtitle'); ?></span>
        <?php else: ?>
        <span class="title-sub">Subtitle goes hurr</span>
        <?php endif; ?>

      </span>
    </a>
    <div class="gps_ring_wrapper">
      <div class="gps_ring_pin"><img src="/assets/img/1453789452_location.svg" class="img-responsive"/></div>
      <div class="gps_ring"></div>
    </div>
  </div>
  <?php 
    endwhile;
    $wp_query = null; 
    $wp_query = $temp;
  ?>
  </div>
</div>
</div>

<div class="map-banner floating"></div>
<div class="map-banner_gradient"></div>
<div class="map-bg"></div>

<?php get_footer(); ?>