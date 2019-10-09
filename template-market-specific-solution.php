<?php
/**
* Template Name: Market Specific Solution
*/

use IMAGA\Theme\Extras;
?>

<?php while (have_posts()) : the_post(); ?>

  <?php $header = get_field('header');?>
  <?php $featured = get_field('featured');?>

  <section id="header" class="bg-gray-300">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 py-md-5">
          <div class="content py-md-6">
            <h1><?php echo $header['title'];?></h1>
            <?php echo $header['introduction'];?>
          </div>
        </div>
        <div class="col-12 col-md-6 text-center">
          <img class="img-fluid" src="https://placehold.it/800x400" alt="TPM Logo met foto invulling">
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
        <div class="col-12 col-md-3 py-5 pl-6 pr-0 market-solution">
          <span class="separator" aria-hidden="true">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon stroke-linecap="square" points="-20,-20 80,50 -20,120" stroke-width="4"></polygon>
            </svg>
          </span>
          <a class="row align-items-center" href="/energy">
            <div class="col-12 col-md-4 p-0">
              <img class="img-fluid" src="https://placehold.it/200" alt="Energy market specific solution">
            </div>
            <div class="col-12 col-md-8">
              energy
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3 py-5 pl-6 pr-0 market-solution">
          <a class="row align-items-center" href="/food">
            <div class="col-12 col-md-4 p-0">
              <img class="img-fluid" src="https://placehold.it/200" alt="Food market specific solution">
            </div>
            <div class="col-12 col-md-8">
              food
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3 py-5 pl-6 pr-0 market-solution">
          <a class="row align-items-center" href="/health">
            <div class="col-12 col-md-4 p-0">
              <img class="img-fluid" src="https://placehold.it/200" alt="Health market specific solution">
            </div>
            <div class="col-12 col-md-8">
              health
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
