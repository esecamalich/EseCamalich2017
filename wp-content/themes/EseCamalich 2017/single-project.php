<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>
  <!-- PROJECT -->
    <section class="main-section center-block detail-container padtop-50">
      <!-- INTRO -->
      <div class="txt-center detail-intro">
        <hgroup>
          <h1 class="bar"><?php the_title() ?></h1>
          <h4 class="bar">
            <?php the_category( ', &nbsp' ); ?>
          </h4>

          <?php if(get_field('project_description')): ?>
            <h2 class="bar"><?php the_field('project_description'); ?></h2>
          <?php endif; ?>

        </hgroup>
      </div>
      <!-- //INTRO -->
      <article class="detail-content">

        <?php if(get_field('project_images')): ?>
        	<?php while(the_repeater_field('project_images')): ?>

            <?php $image = get_sub_field('single_image'); if( !empty($image) ): ?>
              <img class="foo" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>

        	<?php endwhile; ?>
        <?php endif; ?>

      </article>
      <div class="pager">
        <?php previous_post_link('<span class="left nav">%link</span>','<img class="svg" src="' . get_template_directory_uri() . '/images/arrow-left.svg" alt="Previous Project" />'); ?>
        <?php next_post_link('<span class="right nav">%link</span>','<img class="svg" src="' . get_template_directory_uri() . '/images/arrow-right.svg" alt="Next Project" />'); ?>
      </div>
    </section>
    <!-- //PROJECT -->

    <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
