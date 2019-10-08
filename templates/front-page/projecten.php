<section class="front-page projecten-en-opdrachtgevers">
  <div class="container">
    <div class="row">
      <div class="col-12 pt-6">
        <h3>Projecten en opdrachtgevers</h3>
        <div class="seperator"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 pl-5 pr-0">
        <?php $args = array( 'post_type' => 'projecten' ); ?>
        <?php $query = new wp_query( $args );?>
        <?php if($query->have_posts()): ?>
          <div class="slick-projecten">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
              <div class="project-item">
                <div class="project-opdrachtgever-logo">
                  <span class="helper"></span>
                  <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_field('opdrachtgever')); ?>" alt="<?php echo get_the_title(get_field('opdrachtgever')); ?>">
                </div>
                <div class="project-opdrachtgever">
                  <?php echo get_the_title(get_field('opdrachtgever')); ?>
                </div>
                <div class="project-titel">
                  <?php the_title(); ?>
                </div>
                <div class="background-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); wp_reset_query();?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
