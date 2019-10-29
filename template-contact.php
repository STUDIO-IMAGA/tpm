<?
/**
* Template Name: Contact
*/

use IMAGA\Theme\Extras;
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/header'); ?>

  <section class="contact-form">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <?php do_shortcode(''); ?>
        </div>
        <div class="col-12 col-md-6">

        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
