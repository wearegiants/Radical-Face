<?php  $posts = get_field('relationship'); if( $posts ): ?>

<hr class="related-divider">
<div class="related">
<h3 class="related-title">Related</h3>
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

<a class="btn btn--related related-btn ss-gizmo ss-right right" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<?php endforeach; ?>

</div>

<?php wp_reset_postdata();?>
<?php endif; ?>