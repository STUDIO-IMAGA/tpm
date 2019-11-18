<?php $solution = get_field('market_specific_solution');?>
<?php $featured_images = get_field('featured_images'); ?>

<section id="header">
  <div class="container">
    <div class="row px-sm-3 px-md-4 px-lg-5 px-xl-6">
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
    <div class="row justify-content-center px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-10">
        <div class="row align-items-stretch">
          <div class="col-9 pb-2 px-2">
            <a class="lightbox" href="<?php echo $featured_images['main_image']['url']; ?>">
              <div class="main-image" style="background-image: url('<?php echo $featured_images['main_image']['url']; ?>');"></div>
            </a>
          </div>
          <div class="col-3 px-2 d-lg-flex flex-column">
            <div class="pb-2 mb-auto">
              <a class="lightbox" href="<?php echo $featured_images['top_image']['url']; ?>">
                <div class="sub-image" style="background-image: url('<?php echo $featured_images['top_image']['url']; ?>');"></div>
              </a>
            </div>
            <div class="py-2">
              <a class="lightbox" href="<?php echo $featured_images['bottom_image']['url']; ?>">
                <div class="sub-image" style="background-image: url('<?php echo $featured_images['bottom_image']['url']; ?>');"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
