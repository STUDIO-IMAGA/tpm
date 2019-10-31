<?php $projects = get_field('projects'); ?>
<?php $post_objects = $projects['projecten']?>
<?php if( $post_objects ): ?>
  <section class="projects">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 pt-6">
          <h3>Projecten en opdrachtgevers</h3>
          <div class="seperator"></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 pb-6">
          <div class="slick-projecten">
            <div><!-- Embrace Empty --></div>
            <?php foreach( $post_objects as $post): ?>
              <?php setup_postdata($post); ?>
              <a class="project-item" href="<?php echo get_post_permalink(); ?>">
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
              </a>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>
