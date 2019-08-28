<? use IMAGA\Theme\Extras; ?>

<section id="section-<?= get_row_index(); ?>" class="layout-reviews">
  <div class="container py-4">
    <div class="row">
      <div class="col-12 text-center py-4">
        <h2 class="display-3"><? the_sub_field('title');?></h2>
      </div>
    </div>
  </div>
  <div class="container-fluid pb-5">
    <div class="row">

      <? $posts = get_sub_field('reviews'); ?>

      <? if( count($posts) > 0 ): ?>
        <div class="review-slider w-100">
          <?php foreach( $posts as $post): setup_postdata($post); ?>
            <div class="review">
              <div class="col-12">
                <div class="row">
                  <div class="col-3 text-right pr-0">
                    <img class="img-fluid img-circle float-right" src="<?= get_the_post_thumbnail_url($post, 'review-thumbnail'); ?>" alt="<? the_title(); ?>">
                  </div>
                  <div class="col-9">
                    <? the_title(); ?>, <? the_field('company'); ?> <? the_field('location'); ?>
                    <span class="review-stars text-orange">
                      <? the_field('stars'); ?>
                    </span>
                    <small>
                      <?= Extras\limit_text( get_the_content(), 30, '... <a class="read-more" href="'.get_the_permalink().'">Verder lezen <i class="fa fa-chevron-right"></i></a>'); ?>
                    </small>
                  </div>
                </div>
              </div>
            </div>
          <? endforeach; ?>
        </div>
        <? wp_reset_postdata(); ?>
      <? else: ?>
      <div class="col-12">
        <div class="alert alert-info text-center">
          <span>Please select atleast 3 Reviews. <a href="<?= get_edit_post_link(); ?>">Edit page <i class="fa fa-arrow-circle-right"></i></a></span>
        </div>
      </div>
      <? endif; ?>

    </div>
  </div>
</section>
