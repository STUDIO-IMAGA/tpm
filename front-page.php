<?php use IMAGA\Theme\Extras; ?>

<?php get_template_part('templates/header'); ?>

<?php if( have_rows('layouts') ): ?>
  <?php while( have_rows('layouts') ): the_row(); ?>

    <?php Extras\get_layout( get_row_layout() ); ?>

  <?php endwhile; ?>
<?php endif; ?>

<section class="layout video-icons">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <div class="slick-gallery">
          <div class="gallery-item">
            <img src="https://placehold.it/720x440" alt="woei">
            <div class="title">
              Bekijk projecten in <a href="#food">Energy</a>
            </div>
          </div>
          <div class="gallery-item">
            <img src="https://placehold.it/720x440" alt="woei">
            <div class="title">
              Bekijk projecten in <a href="#food">Food</a>
            </div>
          </div>
          <div class="gallery-item">
            <img src="https://placehold.it/720x440" alt="woei">
            <div class="title">
              Bekijk projecten in <a href="#food">health</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 text-center">
        <h4>Ontdek onze Market Specific Solutions</h4>
        <div class="row text-center icons">
          <div class="col-4">
            <img class="img-fluid" src="https://placehold.it/100" alt="">
            <br/>
            <a href="#">energy</a>
          </div>
          <div class="col-4">
            <img class="img-fluid" src="https://placehold.it/100" alt="">
            <br/>
            <a href="#">food</a>
          </div>
          <div class="col-4">
            <img class="img-fluid" src="https://placehold.it/100" alt="">
            <br/>
            <a href="#">health</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<?php get_template_part('templates/parts/projecten-opdrachtgevers'); ?>
