<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="display-1 mb-5">
          <span class="underline-green">Related reviews</span>
        </h3>
      </div>
    </div>
    <div class="row">
      <?php $args = array( 'post_type' => 'reviews', 'orderby' => 'post_date', 'order' => 'desc', 'posts_per_page' => 4 ); ?>
      <?php $query = new wp_query( $args ); ?>
      <?php $i = 0;?>
      <div class="card-deck">
        <?php if($query->have_posts()): ?>
          <?php while( $query->have_posts() ) :  $query->the_post(); $i++; ?>

            <article <?php post_class('card box-shadow overflow-hidden'); ?>>
              <a class="text-body" href="<?php the_permalink(); ?>">
                <?php if( has_post_thumbnail() ): ?>
                  <img class="card-img-top" src="<?php the_post_thumbnail_url('post-thumbnail-related'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="card-body">
                  <div class="card-title">
                    <header>
                      <h1 class="display-4 text-body">
                        <?php the_title(); ?>
                      </h1>
                    </header>
                  </div>
                  <div class="card-text text-muted">
                    <?php the_field('lead'); ?>
                  </div>
                </div>
              </a>
            </article>

            <?php if($i % 4 == 0): ?>
          </div><div class="card-deck">
            <?php endif; ?>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php wp_reset_query(); ?>
        <?php endif; ?>
    </div>
  </div>
</section>
