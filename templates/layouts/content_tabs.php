<?php
switch (get_sub_field('content_position')) {
  case 'content-tabs':
    $order = "order-1";
    break;

  case 'tabs-content':
    $order = "order-3";
    break;
}
?>


<section class="layout content-tabs">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 <?php echo $order; ?>">
        <h2><?php the_sub_field('title'); ?></h2>
        <?php the_sub_field('content'); ?>
      </div>
      <div class="col-12 col-md-6 pt-4 order-2">
        <?php $tabs = get_sub_field('tabs'); ?>

        <ul class="tabs-nav nav" id="tab-<?php echo get_row_index(); ?>" role="tablist">

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

        <div class="tab-content panes" id="tabContent-<?php echo get_row_index(); ?>">

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
