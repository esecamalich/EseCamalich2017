<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section class="full-block error-page txt-center vrt-center-parent">
	<hgroup class="vrt-center">
		<h1>4-OH-4!</h1>
		<h2>There has been a <span class="tiny">tiny</span> <span class="itsy">itsy</span> <span class="bitsy">bitsy</span> mistake</h2>
		<h4>Perhaps you were looking for some of <a href="<?php echo get_page_link(41); ?>">my selected projects</a>?</h4>
	</hgroup>
</section>

<?php get_footer(); ?>
