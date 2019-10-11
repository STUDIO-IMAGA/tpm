<?php use IMAGA\Theme\Assets; ?>

<section class="layout gallery-icons">
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
        <div class="row justify-content-center text-center icons">
          <div class="col-4 icon">
            <img class="img-fluid" src="<?php echo Assets\asset_path('images/energy-icon.png'); ?>" alt="Energy Market Specific Solution">
            <a href="/market-specific-solutions/energy">energy</a>
          </div>
          <div class="col-4 icon">
            <img class="img-fluid" src="<?php echo Assets\asset_path('images/food-icon.png'); ?>" alt=" Food Market Specific Solution">
            <a href="/market-specific-solutions/food">food</a>
          </div>
          <div class="col-4 icon">
            <img class="img-fluid" src="<?php echo Assets\asset_path('images/health-icon.png'); ?>" alt="Health Market Specific Solution">
            <a href="/market-specific-solutions/health">health</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
