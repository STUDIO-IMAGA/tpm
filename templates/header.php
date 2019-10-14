<?php $header = get_field('header');?>
<?php $featured = get_field('featured');?>

<section id="header" class="bg-gray-300 bg-grid">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 py-md-5">
        <div class="content py-md-6">
          <h1><?php echo $header['title'];?></h1>
          <?php echo $header['introduction'];?>
        </div>
      </div>
      <div class="col-12 col-md-6 text-center">
        <img class="img-fluid" src="<?php echo $header['image']['url']; ?>" alt="TPM Logo met foto invulling">
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <div class="enumeration">
          <span>Project management & Consultancy</span>
          <span class="seperator"></span>
          <span>Enginering</span>
          <span class="seperator"></span>
          <span>Interim professionals</span>
        </div>
      </div>
    </div>
  </div>
</section>
