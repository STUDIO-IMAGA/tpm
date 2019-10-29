<?php $header = get_field('header');?>
<?php $featured = get_field('featured');?>

<section id="header">
  <div class="container">
    <div class="row align-items-center px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-12 col-md-6 py-md-5">
        <div class="content py-md-6">
          <h1><?php echo $header['title'];?></h1>
          <?php echo $header['introduction'];?>
        </div>
      </div>
      <?php if( $header['image'] ): ?>
        <div class="col-12 col-md-6 text-center">
          <img class="img-fluid" src="<?php echo $header['image']['url']; ?>" alt="TPM Logo met foto invulling">
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
