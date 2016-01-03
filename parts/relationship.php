<?php  $posts = get_field('relationship'); if( $posts ): ?>
<div class="related">
<hr class="divider compact">
<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
<?php setup_postdata($post); ?>

<div class="related_point">
  <a href="<?php the_permalink(); ?>">Related: <?php the_title(); ?></a>
</div>

<?php endforeach; ?>
</div>
<?php wp_reset_postdata();?>
<?php endif; ?>