<?php
/**
 * Template Name: Home
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

	<!-- HOME -->
		<section class="main-section full-block center-block intro">
			<header class="full-width intro-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="left logo-container">
					<img class="logo intro-logo svg" src="<?php echo get_template_directory_uri(); ?>/images/logo-SergioCamalich.svg" alt="">
				</a>
				<a type="button" class="menu-icon right">
					<span></span>
				</a>
			</header>
			<!-- INTRO -->
			<div class="intro-txt left">
				<hgroup>
					<h4>Hola!</h4>
					<h1>I am Sergio Camalich</h1>
					<h2>Designer, Front-End Developer, creator of <a href="http://www.thearcaeproject.com">The Arcae Project</a> <span class="amp">&</span> <span class="after-amp">a full-on millenial.</span></h2>
				</hgroup>
				<a href="<?php echo get_page_link(19); ?>" class="callto-action">Get to know me better</a>
			</div>
			<!-- //INTRO -->
			<div class="hand-container right">
				<img class="hand" src="<?php echo get_template_directory_uri(); ?>/images/peace-man.png" alt="">
				<img class="cover" src="<?php echo get_template_directory_uri(); ?>/images/hole-cover.svg" alt="">
			</div>
		</section>
		<!-- //HOME -->
		<!-- LATEST PROJECTS -->
		<section class="main-section full-width latest-projects polygon-right padtop-150 foo">
			<header class="center-block border-header txt-center">
				<h3>
					Latest <span class="txt-cross cross-projects">Victims</span>
				</h3>
			</header>
			<div class="projects-container center-block padbot-150">
				<?php
					// WP_Query arguments
					$args = array(
					'post_type' => array( 'project' ),
					'posts_per_page' => 4
					);

					// The Query
					$latest = new WP_Query( $args );
				?>
				<ul class="projects-list">
					<?php if ( $latest->have_posts() ) : while ( $latest->have_posts() ) : $latest->the_post(); ?>
					<li class="bar">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<a href="<?php the_permalink(); ?>" style="background: url(<?php echo $url ?>) center no-repeat; background-size: cover; ">
							<hgroup class="project-title">
								<h1>
									<?php the_title(); ?>
								</h1>
							</hgroup>
						</a>
					</li>
					<?php endwhile; endif; ?>
				</ul>
				<a href="<?php echo get_page_link(41); ?>" class="callto-action right">
					See all projects
				</a>
			</div>
		</section>
		<!-- //LATEST PROJECTS -->
		<!-- LETS WORK -->
		<section class="main-section full-block lets-work foo">
			<div class="full-block vrt-center-parent txt-center callto-work">
				<hgroup class="vrt-center">
						<h4>Lets</h4>
						<h1><span>Work</span></h1>
						<h4>Together</h4>
						<a href="<?php echo get_page_link(58); ?>" class="btn btn-work">
							Contact Me
						</a>
				</hgroup>
			</div>
		</section>
		<!-- //LETS WORK -->

<?php get_footer(); ?>
