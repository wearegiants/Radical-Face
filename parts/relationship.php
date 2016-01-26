<?php  $posts = get_field('relationship'); if( $posts ): ?>


<div class="wrapper bg--color_white">
<div class="related">
<h2 class="margin-bottom_none">Related Point</h2>

<?php $parent = $post->post_name; ?>

<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
<?php setup_postdata($post); ?>

<?php 
  $child = $post->post_name; 

  if ($child != $parent) {
    $status = '';
  } else {
    $status = 'current';
  }

?>

<div class="related_point <?php echo $status; ?>">
  <div class="fs-row">
    <div class="related_title fs-cell fs-all-third"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="related_desc fs-cell fs-lg-8 fs-md-4 fs-sm-3">Description goes here.</div>
    <hr class="compact divider fs-cell fs-lg-hide fs-md-hide fs-sm-3">
  </div>
</div>

<?php endforeach; ?>

</div>
</div>

<?php wp_reset_postdata();?>
<?php endif; ?>