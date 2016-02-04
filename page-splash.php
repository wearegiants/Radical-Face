<?php Themewrangler::setup_page();get_header('splash' /***Template Name: Splash */); ?>

<div class="map-banner floating"></div>
<div class="map-banner_gradient"></div>

<!-- Welcome Screen -->
<?php include locate_template('parts/welcome.php' ); ?>
<!-- Map Points -->
<?php include locate_template('parts/poi.php' ); ?>
<!-- Map Base -->

<?php get_footer('splash'); ?>