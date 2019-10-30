<?php $market_specific_solutions = get_field('market_specific_solutions'); ?>
<section class="gallery-icons">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 order-2 pb-3 pb-md-0">
        <?php $post_objects = $market_specific_solutions['gallery']?>
        <?php if( $post_objects ): ?>
          <div class="slick-gallery">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <?php $image = wp_get_attachment_image_src( $post['image'] , 'gallery_icon' ); ?>
              <div class="gallery-item">
                <img src="<?php echo esc_url($image[0]); ?>" alt="uitgelichte '<?php echo $post['sector']; ?>' market afbeelding">
                <div class="title">
                  Bekijk projecten in <a href="/archive/<?php echo $post['sector']; ?>"><?php echo $post['sector']; ?></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
      </div>
      <div class="col-12 col-md-6 text-center order-1 order-md-3 pb-4 pb-md-0">
        <h4>Ontdek onze Market Specific Solutions</h4>
        <div class="row justify-content-center text-center icons">
          <div class="col-4 icon energy">
            <a class="link" href="/market-specific-solutions/energy">energy</a>
          </div>
          <div class="col-4 icon food">
            <a class="link" href="/market-specific-solutions/food">food</a>
          </div>
          <div class="col-4 icon health">
            <a class="link" href="/market-specific-solutions/health">health</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
