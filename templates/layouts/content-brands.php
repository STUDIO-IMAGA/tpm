<?php $tint = (get_sub_field('tint'))?' bg-gray-100':''; ?>
<?php $images = get_sub_field('brands'); ?>
<?php if( $images ): ?>
  <section class="content-brands">
    <div class="container">
      <div class="row align-items-center">
        <?php foreach( $images as $image ): ?>
          <div class="col-6 col-sm text-center py-5">
            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
