<section id="section-<?= get_row_index(); ?>" class="layout-pricing mb-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center mb-3 mt-3">
        <? get_template_part('templates/parts/title'); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7">

        <? $args = array('post_type' => 'products', 'posts_per_page' => -1); ?>
        <? $query = new wp_query( $args );?>

        <? if($query->have_posts()): ?>
          <table class="table table-hover">
            <tbody>
              <? while( $query->have_posts() ) : $query->the_post(); ?>
                <? if(get_field('price') and (get_field('bundle_one') or get_field('bundle_two') or get_field('bundle_three') or get_field('bundle_four')) ): ?>
                  <tr>
                    <td class="product-title">
                      <div><? the_title(); ?></div>
                      <div><small class="text-muted"><?= strip_tags(get_the_content()); ?></small></div>
                    </td>
                    <td class="product-price">&euro; <span class="lead"><? the_field('price'); ?></span></td>
                  </tr>
                <? endif;?>
              <? endwhile; ?>
              <? wp_reset_postdata(); wp_reset_query();?>
            </tbody>
          </table>
        <? endif; ?>
      </div>
    </div>
  </div>
</section>
