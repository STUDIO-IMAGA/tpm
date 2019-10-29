<?php $projects = get_field('projects'); ?>
<?php $post_objects = $projects['projecten']?>
<?php if( $post_objects ): ?>
  <section class="projects">
    <div class="container">
      <div class="row px-sm-3 px-md-4 px-lg-5 px-xl-6">
        <div class="col-12 pt-6">
          <h3>Projecten en opdrachtgevers</h3>
          <div class="seperator"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 pl-0 pr-0">
          <div class="slick-projecten">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
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
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>
