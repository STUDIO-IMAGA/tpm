<?php use IMAGA\Theme\Extras; ?>

<section class="layout blog-posts">
  <div class="container">
    <div class="row pt-md-8 pb-md-6">
      <div class="col-12 col-md-3">
        <div class="title">
          <h2>Van de start<br/>tot de afronding<br/>van een project</h2>
          <p>Wij werken volgens een werkwijze die<br/> lorem ipsum dolor sit amet consectetuer adipiscing elit.</p>
        </div>
      </div>
      <div class="col-12 col-md-9">
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
