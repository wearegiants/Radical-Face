<?php  $posts = get_field('relationship'); if( $posts ): ?>

<div class="wrapper bg--color_white">
<div class="related">
<h4 class="margin-bottom_none">Related Point</h4>

<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
<?php setup_postdata($post); ?>

<div class="related_point">
  <div class="fs-row">
    <div class="fs-cell fs-all-third"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">Some copy goes here. </div>
    <hr class="compact divider fs-cell fs-lg-hide fs-md-hide fs-sm-3">
  </div>
</div>

<?php endforeach; ?>

</div>
</div>

<?php wp_reset_postdata();?>
<?php endif; ?>