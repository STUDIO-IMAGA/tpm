<section id="section-<?php echo get_row_index(); ?>" class="layout-facts <?php the_sub_field('background_color'); ?> <?php the_sub_field('text_color'); ?>">
  <div class="container">
    <div class="row text-center">
      <?php if( have_rows('facts') ): ?>
        <?php while ( have_rows('facts') ) : the_row(); ?>
          <div class="col-12 col-md">
            <h2 class="display-2"><?php echo ( get_sub_field('change') == 'none' )?'':get_sub_field('change'); ?><?php the_sub_field('amount'); ?></h2>
            <p class="lead"><?php echo do_shortcode( get_sub_field('subject') ); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif;?>
    </div>
    <div class="row">
      <div class="col-12 text-center <?php the_sub_field('text_color'); ?>">
        <small><?php echo do_shortcode( get_sub_field('lead') ); ?></small>
      </div>
    </div>
  </div>
</section>
