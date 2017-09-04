<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post();?>
                <?php the_title(); ?>
<?php endwhile; endif; ?>

<!-- INTRO -->
<section class="main-section center-block intro">
	<!-- INTRO -->
	<div class="intro-txt left">
		<hgroup>
			<?php if(get_field('page_headline')): ?>
			<h1><?php the_field('page_headline'); ?></h1> <h4>/ p.1</h4>
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
		'post_type' => array( 'projects' ),
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

<!-- INTRO -->
<section class="main-section center-block intro">
	<!-- INTRO -->
	<div class="intro-txt left">
		<hgroup>
			<?php if(get_field('page_headline')): ?>
			<h1><?php the_field('page_headline'); ?></h1> <h4>/ p.1</h4>
			<?php endif; ?>
			<?php if(get_field('page_description')): ?>
			<h2><?php the_field('page_description', false, false); ?></h2>
		<?php endif; ?>
		</hgroup>
	</div>
	<!-- //INTRO -->
</section>
<!-- //INTRO -->

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
