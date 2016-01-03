<?php Themewrangler::setup_page();get_header(/***Template Name: No Sidebar */); ?>

<div class="fs-row">
	<section id="content" role="main" class="fs-cell fs-lg-7 fs-md-6 fs-sm-3">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="header">
				<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
			</header>
			<section class="entry-content">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
		</article>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_footer(); ?>