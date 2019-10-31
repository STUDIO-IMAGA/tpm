<?php $callout = get_field('callout_checkmarks'); ?>
<?php $items = $callout['items']; ?>
<?php if($items): ?>
  <section class="callout">
    <div class="container">
      <div class="row pt-3 py-md-8 px-sm-3 px-md-4 px-lg-5 px-xl-6">
        <div class="col-12 text-white">
          <h4 class="text-white"><?php echo $callout['title']; ?></h4>
          <ul class="list-checkmark list-inline">
            <?php foreach( $items as $item ): ?>
              <li class="mr-5"><?php echo $item['title']; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
