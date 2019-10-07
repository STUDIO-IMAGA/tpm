<section class="front-page ervaringen">
  <div class="container">
    <div class="row pt-md-8 pb-md-6">
      <div class="col-12 col-md-3">
        <div class="title">
          <h2>Ervaringen van<br/>onze klanten</h2>
        </div>
      </div>
      <div class="col-12 col-md-9 pl-md-6">
        <?php $args = array( 'post_type' => 'ervaringen' ); ?>
        <?php $query = new wp_query( $args );?>
        <?php if($query->have_posts()): ?>
          <div class="slick-ervaringen">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
              <div class="ervaringen-item">
                <p><?php the_content(); ?></p>
                <div class="handtekening">
                  <div class="persoon">
                    <?php the_title(); ?>
                  </div>
                  <div class="bedrijf">
                    <?php echo get_the_title( get_field('bedrijf') ); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); wp_reset_query();?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
