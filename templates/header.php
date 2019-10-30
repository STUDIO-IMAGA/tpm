<section id="header">
  <div class="container">
    <div class="row align-items-center px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-12 col-md-6">
        <div class="content py-md-6">
          <h1><?php the_field('title'); ?></h1>
          <?php the_field('introduction'); ?>
        </div>
      </div>
      <?php if( has_post_thumbnail() ): ?>
        <div class="col-12 col-md-6 text-center">
          <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
