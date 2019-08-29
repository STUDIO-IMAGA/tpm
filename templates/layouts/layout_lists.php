<?php use IMAGA\Theme\Extras; ?>

<section id="section-<?php echo get_row_index(); ?>" class="layout-lists <?php the_sub_field('background_color'); ?> <?php the_sub_field('text_color'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12 text-md-center">
        <?php echo Extras\heading_based_on_length( get_sub_field('title') ); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7">
        <?php if( have_rows('list') ): ?>
          <?php while ( have_rows('list') ) : the_row(); ?>
            <h4 class="display-2"><i class="fa <?php the_sub_field('icon'); ?>"></i> <?php the_sub_field('title'); ?></h4>
          <?php endwhile; ?>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
