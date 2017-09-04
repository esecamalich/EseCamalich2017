<?php
/**
 * Template Name: Projects
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
						<?php if(get_field('page_headline')): ?>
						<h1><?php the_field('page_headline'); ?></h1> <?php if( is_paged() ) { ?><h4>/ p.<?php echo $paged ?></h4><?php } ?>
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
		<section class="main-section full-width latest-projects polygon-right padtop-50 foo">
			<div class="projects-container center-block padbot-150">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					// WP_Query arguments
					$args = array(
					'post_type' => array( 'project' ),
					'posts_per_page' => 8,
					'paged' => $paged
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
					<?php endwhile; ?>
				</ul>

				<?php if ($latest->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
				<div class="pager">
	        <span class="left nav"><?php echo get_previous_posts_link('<img class="svg" src="' . get_template_directory_uri() . '/images/arrow-left.svg" alt="Previous Project" />'); ?></span>
	        <span class="right nav"><?php echo get_next_posts_link('<img class="svg" src="' . get_template_directory_uri() . '/images/arrow-right.svg" alt="Next Project" />', $latest->max_num_pages); ?></span>
	      </div>
				<?php } ?>
				<?php
				// clean up after the query and pagination
				wp_reset_postdata();
				?>
			<?php endif; ?>
			</div>
		</section>
		<!-- //LATEST PROJECTS -->

<?php get_footer(); ?>
