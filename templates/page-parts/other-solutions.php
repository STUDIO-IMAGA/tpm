<?php $market_specific_solution = get_field('market_specific_solution'); ?>
<section class="other-solutions">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <h4>Andere Market Specific Solutions</h4>
        <div class="seperator"></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <?php if( $market_specific_solution != 'Energy'): ?>
          <div class="icon energy">
            <a class="link" href="<?php echo esc_url( get_bloginfo('url') ); ?>/energy">
              Energy
            </a>
          </div>
        <?php endif; ?>
        <?php if( $market_specific_solution != 'Food'): ?>
          <div class="icon food">
            <a class="link" href="<?php echo esc_url( get_bloginfo('url') ); ?>/food">
              Food
            </a>
          </div>
        <?php endif; ?>
        <?php if( $market_specific_solution != 'Health'): ?>
          <div class="icon health">
            <a class="link" href="<?php echo esc_url( get_bloginfo('url') ); ?>/health">
              Health
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
