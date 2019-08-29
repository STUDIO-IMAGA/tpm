<?php use IMAGA\Theme\Assets; ?>
<?php $rows = get_field('layouts' ); ?>
<?php $first_row = $rows[0]; ?>
<?php $color = str_replace('bg', '', $first_row['background_color']); ?>

<div class="container py-4">
  <div class="row text-center">
    <div class="col-3 <?php echo get_field('conversion_category') == 'conversion-research' ? "conversion-arrow$color" : '' ; ?>">
      <a href="/conversion-optimization/conversion-research#content">
        <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
        <h4 class="d-none d-md-block text-white">Conversion<br>Research</h4>
      </a>
    </div>
    <div class="col-3 <?php echo get_field('conversion_category') == 'conversion-strategy' ? "conversion-arrow$color" : '' ; ?>">
      <a href="/conversion-optimization/conversion-strategy#content">
        <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
        <h4 class="d-none d-md-block text-white">Conversion<br>Strategy</h4>
      </a>
    </div>
    <div class="col-3 <?php echo get_field('conversion_category') == 'conversion-design' ? "conversion-arrow$color" : '' ; ?>">
      <a href="/conversion-optimization/conversion-design#content">
        <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
        <h4 class="d-none d-md-block text-white">Conversion<br>Design</h4>
      </a>
    </div>
    <div class="col-3 <?php echo get_field('conversion_category') == 'conversion-build' ? "conversion-arrow$color" : '' ; ?>">
      <a href="/conversion-optimization/conversion-build#content">
        <img class="img-fluid mb-2" src="<?php echo Assets\asset_path('images/icons/conversion-build-light.svg');?>" alt="Conversion Build">
        <h4 class="d-none d-md-block text-white">Conversion<br>Build</h4>
      </a>
    </div>
  </div>
</div>
