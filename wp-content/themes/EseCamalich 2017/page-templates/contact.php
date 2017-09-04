<?php
/**
 * Template Name: Contact
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
	<section class="main-section center-block intro">
		<!-- INTRO -->
		<div class="intro-txt left">
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

	<!-- LATEST PROJECTS -->
	<section class="main-section full-width latest-projects padtop-50">
		<div class="contact-container center-block padbot-100">
			<div class="contact-left">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
			<?php echo do_shortcode( '[contact-form-7 html_class="contact-form" id="62" title=""]' ); ?>
		</div>
	</section>
	<!-- //LATEST PROJECTS -->

<?php get_footer(); ?>
