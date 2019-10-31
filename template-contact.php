<?
/**
* Template Name: Contact
*/

use IMAGA\Theme\Extras;

?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/header'); ?>

  <?php $contact_form_id = get_field('contact_form_id'); ?>
  <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
  <?php $logo = wp_get_attachment_image_src($custom_logo_id , 'full'); ?>

  <section class="contact-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 pt-6 pb-4">
              <h2><?php the_title(); ?></h2>
              <?php the_field('content'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-6 py-5">
          <?php if( $contact_form_id ): ?>
            <?php echo do_shortcode('[contact-form-7 id="'.$contact_form_id.'"]'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
