<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body class="fs-grid">
<div id="wrapper">

<header id="header">
  <div class="fs-row">
    <menu id="header-main" class="fs-cell fs-lg-4 fs-md-2 fs-sm-2">
      <a href="/" id="header--logo" class="btn btn--logo btn--nav btn_first"><?php bloginfo('name' );?></a>
    </menu>
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1 text-right">
      <a data-swap-target="#mobile-menu" class="mobile-toggle btn btn--hamburg right btn--nav btn_first btn_last">Menu</a>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide text-right">
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
      <?php // include locate_template('parts/store/shopify--bag.php') ?>
    </menu>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
