<?php Themewrangler::setup_page();get_header('splash' /***Template Name: Splash */); ?>

<!-- Welcome Screen -->
<?php include locate_template('parts/welcome.php' ); ?>
<!-- Map Points -->
<?php include locate_template('parts/poi.php' ); ?>
<!-- Map Base -->

<?php get_footer('splash'); ?>