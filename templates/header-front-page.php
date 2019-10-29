<?php $header = get_field('header'); ?>
<?php $items = $header['featured_list']; $i = 0; ?>
<section id="header">
  <div class="container">
    <div class="row align-items-center px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-12 col-md-6 order-2">
        <div class="content">
          <h1><?php echo $header['title'];?></h1>
          <?php echo $header['introduction'];?>
        </div>
      </div>
      <div class="col-12 col-md-6 text-md-center order-1 order-md-3">
        <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $header['title'];?>">
      </div>
    </div>
    <?php if($items): ?>
      <div class="row px-6">
        <div class="col-12">
          <div class="enumeration">
            <?php foreach( $items as $item ): $i++; ?>
              <span><?php echo $item['title']; ?></span>
              <?php if($i % 3): ?>
                <span class="seperator"></span>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
