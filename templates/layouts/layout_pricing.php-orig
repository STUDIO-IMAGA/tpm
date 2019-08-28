<section id="section-<?= get_row_index(); ?>" class="layout-pricing">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">

        <? $args = array('post_type' => 'products', 'posts_per_page' => -1); ?>
        <? $query = new wp_query( $args );?>
        <? $total_price_bundle_one; ?>
        <? $total_price_bundle_two; ?>
        <? $total_price_bundle_three; ?>
        <? $total_price_bundle_four; ?>

        <? if($query->have_posts()): ?>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <? while( $query->have_posts() ) : $query->the_post(); ?>

                  <? (!get_field('bundle_one'))?:$total_price_bundle_one = $total_price_bundle_one + (int)get_field('price'); ?>
                  <? (!get_field('bundle_two'))?:$total_price_bundle_two = $total_price_bundle_two + (int)get_field('price'); ?>
                  <? (!get_field('bundle_three'))?:$total_price_bundle_three = $total_price_bundle_three + (int)get_field('price'); ?>
                  <? (!get_field('bundle_four'))?:$total_price_bundle_four = $total_price_bundle_four + (int)get_field('price'); ?>

                <? endwhile; ?>

                <? $bundle_one_price = number_format( ($total_price_bundle_one ), 0, ',', '.'); ?>
                <? $bundle_one_discount_price = number_format( ($total_price_bundle_one - (int)get_field('bundle_one_discount', 'option')), 0, ',', '.'); ?>

                <? $bundle_two_price = number_format( ($total_price_bundle_two ), 0, ',', '.'); ?>
                <? $bundle_two_discount_price = number_format( ($total_price_bundle_two - (int)get_field('bundle_two_discount', 'option')), 0, ',', '.'); ?>

                <? $bundle_three_price = number_format( ($total_price_bundle_three ), 0, ',', '.'); ?>
                <? $bundle_three_discount_price = number_format( ($total_price_bundle_three - (int)get_field('bundle_three_discount', 'option')), 0, ',', '.'); ?>

                <? $bundle_four_price = number_format( ($total_price_bundle_four ), 0, ',', '.'); ?>
                <? $bundle_four_discount_price = number_format( ($total_price_bundle_four - (int)get_field('bundle_four_discount', 'option')), 0, ',', '.'); ?>


                <th class="bg-blue-10" scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      S
                    </h3>
                    <small class="text-muted">
                      &euro; <?= $bundle_one_discount_price; ?>,- <small>p.m.</small>
                      <br>
                      <small class="product-discount">&euro; <strike><?= $bundle_one_price; ?></strike>,- p.m.</small>
                    </small>
                  </div>
                </th>
                <th class="bg-blue-15" scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      M
                    </h3>
                    <small class="text-muted">
                      &euro; <?= $bundle_two_discount_price; ?>,- <small>p.m.</small>
                      <br>
                      <small class="product-discount">&euro; <strike><?= $bundle_two_price; ?></strike>,- p.m.</small>
                    </small>
                  </div>
                </th>
                <th class="bg-blue-20" scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      L
                    </h3>
                    <small class="text-muted">
                      &euro; <?= $bundle_three_discount_price; ?>,- <small>p.m.</small>
                      <br>
                      <small class="product-discount">&euro; <strike><?= $bundle_three_price; ?></strike>,- p.m.</small>
                    </small>
                  </div>
                </th>
                <th class="bg-blue-25" scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      XL
                    </h3>
                    <small class="text-muted">
                      &euro; <?= $bundle_four_discount_price; ?>,- <small>p.m.</small>
                      <br>
                      <small class="product-discount">&euro; <strike><?= $bundle_four_price; ?></strike>,- p.m.</small>
                    </small>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <? while( $query->have_posts() ) : $query->the_post(); ?>
                <? if(get_field('price') and (get_field('bundle_one') or get_field('bundle_two') or get_field('bundle_three') or get_field('bundle_four')) ): ?>
                  <tr>
                    <td class="product-title">
                      <div><? the_title(); ?></div>
                      <div><small class="text-muted"><?= strip_tags(get_the_content()); ?></small></div>
                    </td>
                    <td class="product-status text-center bg-blue-10">
                      <?= (get_field('bundle_one'))?'<i class="fa fa-check included">':'<i class="fa fa-times not-included"></i>';?>
                    </td>
                    <td class="product-status text-center bg-blue-15">
                      <?= (get_field('bundle_two'))?'<i class="fa fa-check included">':'<i class="fa fa-times not-included"></i>';?>
                    </td>
                    <td class="product-status text-center bg-blue-20">
                      <?= (get_field('bundle_three'))?'<i class="fa fa-check included">':'<i class="fa fa-times not-included"></i>';?>
                    </td>
                    <td class="product-status text-center bg-blue-25">
                      <?= (get_field('bundle_four'))?'<i class="fa fa-check included">':'<i class="fa fa-times not-included"></i>';?>
                    </td>
                  </tr>
                <? endif;?>
              <? endwhile; ?>
              <? wp_reset_postdata(); wp_reset_query();?>
            </tbody>
            <tfoot>
              <tr>
                <td class="py-3"></td>
                <td class="bg-blue-10 py-3 text-center">
                  <a href="#" class="btn btn-blue px-4">Bundle <span class="badge badge-white">S</span></a>
                </td>
                <td class="bg-blue-15 py-3 text-center">
                  <a href="#" class="btn btn-blue px-4">Bundle <span class="badge badge-white">M</span></a>
                </td>
                <td class="bg-blue-20 py-3 text-center">
                  <a href="#" class="btn btn-blue px-4">Bundle <span class="badge badge-white">L</span></a>
                </td>
                <td class="bg-blue-25 py-3 text-center">
                  <a href="#" class="btn btn-blue px-4">Bundle <span class="badge badge-white">XL</span></a>
                </td>
              </tr>
            </tfoot>
          </table>
        <? endif; ?>
        <p class="text-muted">
          <small>* = minimum of 2 months</small>
          <br>
          <small>** = minimum of 3 months</small>
        </p>
      </div>
    </div>
  </div>
</section>
