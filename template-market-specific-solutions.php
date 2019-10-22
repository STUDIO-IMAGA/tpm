<?php
/**
* Template Name: Market Specific Solutions
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
          <div class="content">
            <h1><?php echo $header['title'];?></h1>
            <?php echo $header['introduction'];?>
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

  <?php get_template_part('templates/layouts/callout','small'); ?>

<?php endwhile; ?>
