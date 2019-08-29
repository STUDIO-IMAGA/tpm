<?php use IMAGA\Theme\Extras; ?>

<section id="section-<?php echo get_row_index(); ?>" class="layout-brands">
  <div class="container">
    <div class="row">
      <div class="col-12 text-md-center">
        <?php if(get_sub_field('title')): ?>
          <div class="h4"><?php the_sub_field('title'); ?></div>
        <?php endif; ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <?php Extras\the_brands( get_sub_field('brands') ); ?>
      </div>
    </div>
  </div>
</section>
