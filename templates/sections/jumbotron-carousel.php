<?
$background = function($has_post_thumbnail){
    if($has_post_thumbnail):
        $url = get_the_post_thumbnail_url();
        return 'style="background-image: url('.$url.');min-height:380px;"';
    endif;
    return;
};
// Bedoeling is dat je op elke pagina een Jumbotron kan plaatsen.
$jumbotron = get_field('jumbotron');
?>

<section class="jumbotron jumbotron-fluid m-0 p-0 bg-center" <?= $background( has_post_thumbnail() ); ?>>

	<? if( $jumbotron['title'] or $jumbotron['lead'] or $jumbotron['cta']): ?>

    <div class="container">

  		<div class="row py-5">

  			<div class="col-12 py-5">

  				<? if( $jumbotron['title'] ): ?>

  					<h1 class="jumbotron-heading display-3 text-white">
  						<?= $jumbotron['title']; ?>
  					</h1>

  				<? endif; ?>

  				<? if( $jumbotron['lead'] ): ?>

  					<div class="lead text-white">
  						<?= $jumbotron['lead'];?>
  					</div>

  				<? endif; ?>

  				<? if( $jumbotron['cta'] ): ?>

  					<div>
  						<? foreach($jumbotron["cta"] as $cta ) :?>

  							<? $color = ($cta['color']) ? "btn-" . $cta['color'] : "btn-primary"; ?>

  							<a href="<?= $cta['url']; ?>" class="btn <?= $color; ?>"><?= $cta['label'] ?></a>

  						<? endforeach; ?>
  					</div>

  				<? endif; ?>

  			</div>

  		<? endif; ?>

  	</div>

  </div>

</section>

<div class="jumbotron jumbotron-fluid p-0">
  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide py-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <? foreach($obj as $item): ?>
          <? get_template_part('templates/sections/jumbotron','carousel-item'); ?>
        <? endforeach; ?>
      </div>
    </div>


  </div>
</div>
