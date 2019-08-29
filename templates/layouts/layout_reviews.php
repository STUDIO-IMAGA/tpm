<?php use IMAGA\Theme\Extras; ?>

<section id="section-<?php echo get_row_index(); ?>" class="layout-reviews">
  <div class="container py-4">
    <div class="row">
      <div class="col-12 text-center py-4">
        <h2 class="display-3"><?php the_sub_field('title');?></h2>
      </div>
    </div>
  </div>
  <div class="container-fluid pb-5">
    <div class="row">

      <?php $posts = get_sub_field('reviews'); ?>

      <?php if( count($posts) > 0 ): ?>
        <div class="review-slider w-100">
          <?php foreach( $posts as $post): setup_postdata($post); ?>
            <div class="review">
              <div class="col-12">
                <div class="row">
                  <div class="col-3 text-right pr-0">
                    <img class="img-fluid img-circle float-right" src="<?php echo get_the_post_thumbnail_url($post, 'review-thumbnail'); ?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="col-9">
                    <?php the_title(); ?>, <?php the_field('company'); ?> <?php the_field('location'); ?>
                    <span class="review-stars text-orange">
                      <?php the_field('stars'); ?>
                    </span>
                    <small>
                      <?php echo Extras\limit_text( get_the_content(), 30, '... <a class="read-more" href="'.get_the_permalink().'">Verder lezen <i class="fa fa-chevron-right"></i></a>'); ?>
                    </small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <div class="col-12">
        <div class="alert alert-info text-center">
          <span>Please select atleast 3 Reviews. <a href="<?php echo get_edit_post_link(); ?>">Edit page <i class="fa fa-arrow-circle-right"></i></a></span>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>
