<?php $header = get_field('header');?>
<?php $featured = get_field('featured');?>

<section id="header" class="bg-gray-300">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 py-md-5">
        <div class="content py-md-6">
          <h1><?php echo $header['title'];?></h1>
          <?php echo $header['introduction'];?>
        </div>
      </div>
      <div class="col-12 col-md-6 text-center">
        <img class="img-fluid" src="https://placehold.it/800x400" alt="TPM Logo met foto invulling">
      </div>
    </div>
  </div>
</section>
<section class="mss-selector">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 arrow">
        <h4>Selecteer één van<br/>onze market specific<br/>solutions</h4>
      </div>
      <div class="col-12 col-md-3 py-5 market-solution">
        <a class="row align-items-center" href="/energy">
          <div class="col-12 col-md-4">
            <img class="img-fluid" src="https://placehold.it/200" alt="Energy market specific solution">
          </div>
          <div class="col-12 col-md-8">
            energy
          </div>
        </a>
      </div>
      <div class="col-12 col-md-3 py-5 market-solution">
        <a class="row align-items-center" href="/food">
          <div class="col-12 col-md-4">
            <img class="img-fluid" src="https://placehold.it/200" alt="Food market specific solution">
          </div>
          <div class="col-12 col-md-8">
            food
          </div>
        </a>
      </div>
      <div class="col-12 col-md-3 py-5 market-solution">
        <a class="row align-items-center" href="/health">
          <div class="col-12 col-md-4">
            <img class="img-fluid" src="https://placehold.it/200" alt="Health market specific solution">
          </div>
          <div class="col-12 col-md-8">
            health
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
