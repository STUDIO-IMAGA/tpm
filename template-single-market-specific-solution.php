<?php
/**
* Template Name: Single Market Specific Solution
*/

use IMAGA\Theme\Extras;
use IMAGA\Theme\Assets;
?>

<?php while (have_posts()) : the_post(); ?>

  <?php $header = get_field('header');?>
  <?php $featured = get_field('featured');?>

  <section id="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="content text-white py-md-5">
            <h5 class="text-blue-light m-0">Market specific solution</h5>
            <h1><?php the_field('title'); ?></h1>
            <?php the_field('introduction'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="featured-projects">
    <div class="container">
      <div class="row justify-content-center mb-6">
        <div class="col-12 col-md-10">
          <?php $post_objects = get_field('featured_projects');?>
          <?php if( $post_objects ): ?>
            <div class="slick-featured-projects">
              <?php foreach( $post_objects as $post): ?>
                <?php setup_postdata($post); ?>
                <div class="featured-item">
                  <div class="project-image">
                    <img class="img-fluid" src="<?php the_post_thumbnail_url('featured-projects'); ?>" alt="<?php the_title(); ?>">
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="slick-featured-projects-captions">
              <?php foreach( $post_objects as $post): ?>
                <?php setup_postdata($post); ?>
                <div class="project-description">
                  <h6><?php the_title(); ?></h6>
                  <div>
                    <?php echo Extras\limit_text(get_field('excerpt'),'12'); ?>...
                    <a href="<?php echo get_permalink(); ?>">Bekijk project</a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>

  <?php if( have_rows('layouts') ): ?>
    <?php while( have_rows('layouts') ): the_row(); ?>
      <?php Extras\get_layout( get_row_layout() ); ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('templates/page-parts/callout','small'); ?>

  <?php get_template_part('templates/page-parts/other-solutions'); ?>

  <?php get_template_part('templates/page-parts/reviews'); ?>

  <?php get_template_part('templates/page-parts/callout','checkmarks'); ?>

  <?php get_template_part('templates/page-parts/projects'); ?>

<?php endwhile; ?>
