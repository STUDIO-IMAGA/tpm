<?php $ervaringen = get_field('reviews'); ?>
<?php $post_objects = $ervaringen['items']?>
<?php if( $post_objects ): ?>
  <section class="reviews">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <div class="row py-4 pt-md-8 pb-md-6">
            <div class="col-12 col-md-3">
              <div class="title">
                <h3><?php echo $ervaringen['title']; ?></h3>
              </div>
            </div>
            <div class="col-12 col-md-9 pl-md-8">
              <div class="slick-reviews">
                <?php foreach( $post_objects as $post): ?>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>
