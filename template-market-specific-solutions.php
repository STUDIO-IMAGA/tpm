<?php
/**
* Template Name: Market Specific Solutions
*/

use IMAGA\Theme\Extras;
use IMAGA\Theme\Assets;
?>

<?php while (have_posts()) : the_post(); ?>

  <section id="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="content">
            <h1><?php the_field('title');?></h1>
            <?php the_field('introduction');?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="selector">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md col-lg-3">
          <h4 class="m-0">Selecteer één van<br/> onze market specific<br/> solutions</h4>
        </div>
        <a class="col-4 col-md market-solution-type energy" href="/energy">
          <span class="separator d-none d-md-block" aria-hidden="true">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon stroke-linecap="square" points="-20,-20 80,50 -20,120" stroke-width="4"></polygon>
            </svg>
          </span>
          <div class="row align-items-center">
            <div class="col-12 p-0">
              <h3>energy</h3>
            </div>
          </div>
        </a>
        <a class="col-4 col-md market-solution-type food" href="/food">
          <div class="row align-items-center">
            <div class="col-12 p-0">
              <h3>food</h3>
            </div>
          </div>
        </a>
        <a class="col-4 col-md market-solution-type health" href="/health">
          <div class="row align-items-center">
            <div class="col-12 p-0">
              <h3>health</h3>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php if( have_rows('layouts') ): ?>
    <?php while( have_rows('layouts') ): the_row(); ?>

      <?php Extras\get_layout( get_row_layout() ); ?>

    <?php endwhile; ?>
  <?php endif; ?>

  <?php $callout_small = get_field('callout_small'); ?>
  <?php if( $callout_small ): ?>
    <section class="callout-small">
      <div class="container">
        <div class="row px-sm-3 px-md-4 px-lg-5 px-xl-6">
          <div class="col-12">
            <span class="text-white"><?php echo $callout_small['text']; ?></span><a class="btn btn-white btn-agenda ml-4" href="/contact"><?php echo $callout_small['btn_text']; ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endif;?>

  <?php $images = get_field('brands'); ?>
  <?php if( $images ): ?>
    <section class="content-brands">
      <div class="container">
        <div class="row align-items-center">
          <?php foreach( $images as $image ): ?>
            <div class="col text-center py-5">
              <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

<?php endwhile; ?>
