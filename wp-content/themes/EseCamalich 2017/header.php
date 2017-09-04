<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#121212" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="<?php echo get_template_directory_uri(); ?>/favicon-32.png" rel="shortcut icon">
	<?php //wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />

	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script>
		window.sr = ScrollReveal();
	  if (sr.isSupported()) {
	    document.documentElement.classList.add('sr');
	  }
	</script>

</head>

<body
	<?php if ( is_page('about-me') ) {
		body_class( array('about-me', 'single-page') );
	} elseif ( is_singular('project') ) {
		body_class( array('single-page', 'single-project') );
	} elseif ( is_page('projects') || is_category() || is_404() ) {
		body_class( array('projects', 'single-page') );
	} elseif ( is_page('contact') ) {
		body_class( array('contact', 'single-page') );
	} else { body_class(); } ?>
>

	<div class="se-pre-con"></div>

	<section class="menu-container big-menu green-container">
		<?php
			wp_nav_menu( array(
				'menu' => 'Main Nav',
				'menu_class' => '',
				'container' => 'nav',
				'container_class' => 'menu'
			) );
		?>
	</section>

	<?php if ( !is_home() || is_singular('project') ) { ?>
		<header class="full-width intro-header clone">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="left logo-container">
				<img class="logo intro-logo svg" src="<?php echo get_template_directory_uri(); ?>/images/logo-SergioCamalich.svg" alt="">
			</a>
			<a type="button" class="menu-icon right">
				<span></span>
			</a>
		</header>
	<?php } ?>

	<?php if ( !is_404() ) { ?>
	<div class="big-parent">
	<?php } ?>
