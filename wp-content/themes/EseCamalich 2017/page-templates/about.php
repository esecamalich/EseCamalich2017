<?php
/**
 * Template Name: About Me
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<!-- INTRO -->
	<section class="main-section full-block center-block intro">
	<!-- INTRO -->
	<div class="intro-txt left foo">
		<hgroup>
			<?php if(get_field('page_subheading')): ?>
				<h4><?php the_field('page_subheading'); ?></h4>
			<?php endif; ?>
			<?php if(get_field('page_headline')): ?>
				<h1><?php the_field('page_headline'); ?></h1>
			<?php endif; ?>
			<?php if(get_field('page_description')): ?>
				<h2><?php the_field('page_description', false, false); ?></h2>
			<?php endif; ?>
		</hgroup>
	</div>
	<!-- //INTRO -->
	</section>
	<!-- //INTRO -->
	<!-- ABOUT ME -->
	<section class="main-section full-width about-info polygon-left padtop-100 clear">
	<div class="center-block two-col clear">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
	<div class="txt-center padbot-100 center-block">
	<ul class="work-icons">
		<li class="bar"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plan.svg" alt="Planning projects by Sergio Camalich"></li>
		<li class="bar"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-design.svg" alt="Designing the best results by Sergio Camalich"></li>
		<li class="bar"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-code.svg" alt="Coding with standards by Sergio Camalich"></li>
	</ul>
	<h4>I plan, design and hand code my own projects</h4>
	</div>
	</section>
	<!-- //ABOUT ME -->
	<!-- LETS WORK -->
	<section class="main-section map-container full-block foo">
	<div id="googlemaps" class="full-block location-map"></div>
	<div class="map-info">
		<p>I am currently based in:</p>
		<h2><a href="<?php the_field('wiki') ?>" target="_blank"><?php the_field('city'); ?><?php if(get_field('country')): ?>, <?php the_field('country'); endif; ?></a></h2>
		<p><a href="mailto:sergio@esecamalich.com">Write me an e-mail</a> or <a href="#">send me a postcard</a> and let's work together!</p>
	</div>
	</section>
	<!-- //LETS WORK -->

<?php get_footer(); ?>
