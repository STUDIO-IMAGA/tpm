<?php use IMAGA\Theme\Extras; ?>

<?php $projects_blog = get_field('projects_blog'); ?>

<section class="blog">
  <div class="container">
    <div class="row pt-md-8 pb-md-6">
      <div class="col-12 col-md-4 col-lg-3">
        <div class="title">
          <h2><?php echo $projects_blog['title']; ?></h2>
          <p><?php echo $projects_blog['content']; ?></p>
        </div>
      </div>
      <div class="col-12 col-md-8 col-lg-9">
        <?php $args = array( 'post_type' => 'post' ); ?>
        <?php $query = new wp_query( $args );?>
        <?php if($query->have_posts()): ?>
          <div class="slick-blog">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
              <div class="blog-item">
                <h4><?php the_title(); ?></h4>
                <p><?php echo Extras\limit_text(get_the_content(),'30'); ?></p>
                <a href="#leesmeer">Meer</a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); wp_reset_query();?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
