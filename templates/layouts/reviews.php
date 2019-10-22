<?php $ervaringen = get_field('reviews'); ?>
<section class="reviews">
  <div class="container">
    <div class="row py-4 pt-md-8 pb-md-6">
      <div class="col-12 col-md-3">
        <div class="title">
          <h3><?php echo $ervaringen['title']; ?></h3>
        </div>
      </div>
      <div class="col-12 col-md-9 pl-md-6">
        <?php $post_objects = $ervaringen['items']?>
        <?php if( $post_objects ): ?>
          <div class="slick-reviews">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="review-item">
                <?php the_content(); ?>
                <div class="handtekening">
                  <div class="persoon">
                    <?php the_title(); ?>
                  </div>
                  <div class="bedrijf">
                    <?php echo get_the_title( get_field('bedrijf') ); ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
