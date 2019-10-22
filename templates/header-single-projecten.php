<?php $solution = get_field('market_specific_solution');?>
<?php $featured_images = get_field('featured_images'); ?>

<section id="header">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="content py-md-6">
          <h5 class="text-blue-light m-0">Market specific solution : <span class="solution-type"><?php echo $solution->name; ?></span></h5>
          <?php the_field('introduction'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="featured-images">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="row align-items-stretch">
          <div class="col-9 pb-2 px-2">
            <div class="main-image" style="background-image: url('<?php echo $featured_images['main_image']['url']; ?>');"></div>
          </div>
          <div class="col-3 px-2 d-lg-flex flex-column">
            <div class="pb-2 mb-auto">
              <div class="sub-image" style="background-image: url('<?php echo $featured_images['top_image']['url']; ?>');"></div>
            </div>
            <div class="py-2">
              <div class="sub-image" style="background-image: url('<?php echo $featured_images['bottom_image']['url']; ?>');"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
