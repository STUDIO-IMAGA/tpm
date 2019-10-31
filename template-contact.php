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
        <div class="col-10 pt-6 pb-4">
          <div class="row justify-content-center">
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12">
                  <h2><?php the_title(); ?></h2>
                  <?php the_field('content'); ?>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-12">
                      <h5><?php the_field('company_name', 'option'); ?></h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-7 order-2">
                      <address class="company">
                        <div class="company_phone">
                          <a href="tel:<?php the_field('company_phone', 'option'); ?>"><?php the_field('company_phone', 'option'); ?></a>
                        </div>
                        <div class="company_email">
                          <a href="mailto:<?php the_field('company_email', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a>
                        </div>
                        <div class="company_address">
                          <a href="https://google.com/maps/dir/Current+Location/korenmolen+38+9203+VA+Drachten">
                            <?php the_field('company_streetname', 'option'); ?> <?php the_field('company_homenumber', 'option'); ?>
                          </br>
                          <?php the_field('company_postalcode', 'option'); ?> <?php the_field('company_city', 'option'); ?>
                        </a>
                      </div>
                    </address>
                  </div>
                  <div class="col-12 col-lg-5 order-1 order-lg-3">
                    <img class="img-fluid mb-3" src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo bloginfo('name'); ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <?php if( $contact_form_id ): ?>
              <?php echo do_shortcode('[contact-form-7 id="'.$contact_form_id.'"]'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
