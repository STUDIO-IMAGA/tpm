<?php $content_tabs = get_field('content_tabs'); ?>

<section class="content-tabs">
  <div class="container">
    <div class="row py-5 py-md-6 px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-12 col-md-6">
        <h2><?php echo $content_tabs['title']; ?></h2>
        <?php echo $content_tabs['content']; ?>
      </div>
      <div class="col-12 col-md-6 pt-4 order-2">
        <?php $tabs = $content_tabs['tabs']; ?>
        <ul class="tabs-nav nav" id="tab" role="tablist">
          <?php $i = 0;?>
          <?php foreach($tabs as $tab): $i++; ?>
            <?php $active = ( $i == 1 ) ? 'active' : '' ; ?>
            <?php $aria_selected = ( $i == 1 ) ? 'aria-selected="true"' : '' ; ?>
            <?php $tab_name = preg_replace('/[^A-Za-z0-9\. -]/', '', str_replace( ' ', '-', mb_strtolower( $tab['title'] ))); ?>
            <li class="nav-item">
              <a class="nav-link <?php echo $active; ?>" id="<?php echo $tab_name; ?>-tab" data-toggle="tab" href="#<?php echo $tab_name; ?>-pane" role="tab" aria-controls="<?php echo $tab_name; ?>-pane" <?php echo $aria_selected; ?>>
                <?php echo mb_strtoupper( $tab['title'] ); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="tab-content panes" id="tabContent">
          <?php $i = 0;?>
          <?php foreach($tabs as $tab): $i++; ?>
            <?php $active = ( $i == 1 ) ? 'active show' : '' ; ?>
            <?php $tab_name = preg_replace('/[^A-Za-z0-9\. -]/', '', str_replace( ' ', '-', mb_strtolower( $tab['title'] ) )); ?>
            <div class="tab-pane fade <?php echo $active; ?>" id="<?php echo $tab_name; ?>-pane" role="tabpanel" aria-labelledby="<?php echo $tab_name; ?>-tab">
              <div class="row">
                <div class="col-12">
                  <?php echo $tab['content']; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
