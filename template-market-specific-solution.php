<?php
/**
* Template Name: Market Specific Solution
*/

use IMAGA\Theme\Extras;
use IMAGA\Theme\Assets;
?>

<?php while (have_posts()) : the_post(); ?>

  <?php $header = get_field('header');?>
  <?php $featured = get_field('featured');?>

  <section id="header" class="bg-blue-dark">
    <div class="container" style="background-image: url('<?php echo $featured['image']['url']; ?>');">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="content text-white py-md-8">
            <h1 class="text-white"><?php echo $header['title'];?></h1>
            <?php echo $header['introduction'];?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mss-selector">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-3">
          <h4>Selecteer één van<br/>onze market specific<br/>solutions</h4>
        </div>
        <div class="col-12 col-md-3 py-5 market-solution energy">
          <span class="separator" aria-hidden="true">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon stroke-linecap="square" points="-20,-20 80,50 -20,120" stroke-width="4"></polygon>
            </svg>
          </span>
          <a class="row align-items-center" href="/energy">
            <div class="col-12 text-center">
              <h3>energy</h3>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3 py-5 market-solution food">
          <a class="row align-items-center" href="/food">
            <div class="col-12 text-center">
              <h3>food</h3>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3 py-5 market-solution health">
          <a class="row align-items-center" href="/health">
            <div class="col-12 text-center">
              <h3>health</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>


  <?php if( have_rows('layouts') ): ?>
    <?php while( have_rows('layouts') ): the_row(); ?>

      <?php Extras\get_layout( get_row_layout() ); ?>

    <?php endwhile; ?>
  <?php endif; ?>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center pb-5">
          <span>Vrijblijvend afspreken om de mogelijkheden te bespreken?</span><a class="btn btn-blue ml-4" href="#"><i class="fa fa-calendar pr-4"></i>Afspraak maken</a>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
