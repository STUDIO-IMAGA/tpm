<section id="section-<?php echo get_row_index(); ?>" class="layout-columns <?php the_sub_field('background_color'); ?> <?php the_sub_field('text_color'); ?> <?php the_sub_field('title_alignment'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if(get_sub_field('title')): ?>
          <div class="h1 mb-4"><?php echo do_shortcode( get_sub_field('title') ); ?></div>
        <?php endif;?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php if( have_rows('columns') ): ?>
          <?php $box_shadow = (get_sub_field('box_shadow') == true)?'box-shadow':''; ?>
          <div class="card-deck">
            <?php while ( have_rows('columns') ) : the_row(); ?>
              <?php $image = get_sub_field('image'); ?>
              <div class="card <?php echo $box_shadow; ?>">
                <div class="card-body">
                  <?php if( !empty($image) ): ?>
                    <div class="text-center">
                      <img class="img-fluid" src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('title'); ?>">
                    </div>
                  <?php endif; ?>
                  <div class="card-text <?php the_sub_field('text_alignment'); ?> <?php the_sub_field('text_color'); ?>">
                    <div class="lead mb-3">
                      <b><?php the_sub_field('title'); ?></b>
                    </div>
                    <div class="lead">
                      <?php echo do_shortcode( get_sub_field('content') ); ?>
                    </div>
                  </div>
                </div>
                <?php if( get_sub_field('footer') ): ?>
                <div class="card-footer">
                  <?php echo do_shortcode( get_sub_field('footer') ); ?>
                </div>
              <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
