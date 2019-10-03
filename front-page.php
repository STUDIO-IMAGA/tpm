<?php use IMAGA\Theme\Extras; ?>

<?php get_template_part('templates/header'); ?>

<?php if( have_rows('layouts') ): ?>
  <?php while( have_rows('layouts') ): the_row(); ?>

    <?php Extras\get_layout( get_row_layout() ); ?>

  <?php endwhile; ?>
<?php endif; ?>

<section class="layout video-icons">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <div class="slick-gallery">
          <div class="gallery-item">
            <img src="https://placehold.it/720x440" alt="woei">
            <div class="title">
              Bekijk projecten in <a href="#food">Energy</a>
            </div>
          </div>
          <div class="gallery-item">
            <img src="https://placehold.it/720x440" alt="woei">
            <div class="title">
              Bekijk projecten in <a href="#food">Food</a>
            </div>
          </div>
          <div class="gallery-item">
            <img src="https://placehold.it/720x440" alt="woei">
            <div class="title">
              Bekijk projecten in <a href="#food">health</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 text-center">
        <h4>Ontdek onze Market Specific Solutions</h4>
        <div class="row text-center icons">
          <div class="col-4">
            <img class="img-fluid" src="https://placehold.it/100" alt="">
            <br/>
            <a href="#">energy</a>
          </div>
          <div class="col-4">
            <img class="img-fluid" src="https://placehold.it/100" alt="">
            <br/>
            <a href="#">food</a>
          </div>
          <div class="col-4">
            <img class="img-fluid" src="https://placehold.it/100" alt="">
            <br/>
            <a href="#">health</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('templates/parts/projecten-opdrachtgevers'); ?>
