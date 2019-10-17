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

  <section id="header" class="bg-blue-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="content text-white py-md-8">
            <h5 class="text-blue-light m-0"><?php echo $header['title'];?></h5>
            <h1 class="text-white"><?php echo $header['title'];?></h1>
            <?php echo $header['introduction'];?>
          </div>
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
          <span>Vrijblijvend afspreken om de mogelijkheden te bespreken?</span><a class="btn btn-blue btn-agenda ml-4" href="/contact">Afspraak maken</a>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
