<?php use IMAGA\Theme\Extras; ?>
<?php use IMAGA\Theme\Assets; ?>

<?php // Get fields
$header = get_field('header');
$featured = get_field('featured');
$content_tabs = get_field('content_tabs');
$market_specific_solutions = get_field('market_specific_solutions');
$projects_blog = get_field('projects_blog');
$callout = get_field('callout');
$ervaringen = get_field('ervaringen');
$projects = get_field('projects');
?>


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

<section class="layout content-tabs">
  <div class="container">
    <div class="row pt-6 pb-6">
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

<section class="layout gallery-icons">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <?php $post_objects = $market_specific_solutions['gallery']?>
        <?php if( $post_objects ): ?>
          <div class="slick-gallery">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <?php $image = wp_get_attachment_image_src( $post['image'] , 'gallery_icon' ); ?>
              <div class="gallery-item">
                <img src="<?php echo esc_url($image[0]); ?>" alt="uitgelichte '<?php echo $post['sector']; ?>' market afbeelding">
                <div class="title">
                  Bekijk projecten in <a href="/archive/<?php echo $post['sector']; ?>"><?php echo $post['sector']; ?></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
      </div>
      <div class="col-12 col-md-6 text-center">
        <h4>Ontdek onze Market Specific Solutions</h4>
        <div class="row justify-content-center text-center icons">
          <div class="col-4 icon">
            <a href="/market-specific-solutions/energy">
              <img class="img-fluid" src="<?php echo Assets\asset_path('images/icon/energy-blue.png'); ?>" alt="Energy Market Specific Solution">
            </a>
            <a class="link" href="/market-specific-solutions/energy">energy</a>
          </div>
          <div class="col-4 icon">
            <a href="/market-specific-solutions/food">
              <img class="img-fluid" src="<?php echo Assets\asset_path('images/icon/food-blue.png'); ?>" alt=" Food Market Specific Solution">
            </a>
            <a class="link" href="/market-specific-solutions/food">food</a>
          </div>
          <div class="col-4 icon">
            <a href="/market-specific-solutions/health">
              <img class="img-fluid" src="<?php echo Assets\asset_path('images/icon/health-blue.png'); ?>" alt="Health Market Specific Solution">
            <a class="link" href="/market-specific-solutions/health">health</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout blog-posts">
  <div class="container">
    <div class="row pt-md-8 pb-md-6">
      <div class="col-12 col-md-3">
        <div class="title">
          <h2><?php echo $projects_blog['title']; ?></h2>
          <p><?php echo $projects_blog['content']; ?></p>
        </div>
      </div>
      <div class="col-12 col-md-9">
        <?php $args = array( 'post_type' => 'post' ); ?>
        <?php $query = new wp_query( $args );?>
        <?php if($query->have_posts()): ?>
          <div class="slick-blog">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
              <div class="blog-item">
                <h4><?php the_title(); ?></h4>
                <p><?php echo Extras\limit_text(get_the_content(),'30'); ?></p>
                <a href="#leesmeer">Meer</a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); wp_reset_query();?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-blue bg-grid">
  <div class="container">
    <div class="row justify-content-around py-6">
      <div class="col-12 col-md-4 text-white col-arrow-right">
        <h3 class="text-white"><?php echo $callout['title_left']; ?></h3>
        <?php echo $callout['content_left']; ?>
      </div>
      <div class="col-12 col-md-6 text-white">
        <h3 class="text-white"><?php echo $callout['title_right']; ?></h3>
        <?php echo $callout['content_right']; ?>
      </div>
    </div>
  </div>
</section>

<section class="front-page ervaringen">
  <div class="container">
    <div class="row pt-md-8 pb-md-6">
      <div class="col-12 col-md-3">
        <div class="title">
          <h3><?php echo $ervaringen['title']; ?></h3>
        </div>
      </div>
      <div class="col-12 col-md-9 pl-md-6">
        <?php $post_objects = $ervaringen['reviews']?>
        <?php if( $post_objects ): ?>
          <div class="slick-ervaringen">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="ervaringen-item">
                <?php the_content(); ?>
                <div class="handtekening">
                  <div class="persoon">
                    <?php the_title(); ?>
                  </div>
                  <div class="bedrijf">
                    <?php echo get_the_title( get_field('bedrijf') ); ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>

<section class="front-page projecten-en-opdrachtgevers">
  <div class="container">
    <div class="row">
      <div class="col-12 pt-6">
        <h3>Projecten en opdrachtgevers</h3>
        <div class="seperator"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 pl-5 pr-0">
        <?php $post_objects = $projects['projecten']?>
        <?php if( $post_objects ): ?>
          <div class="slick-projecten">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="project-item">
                <div class="project-opdrachtgever-logo">
                  <span class="helper"></span>
                  <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_field('opdrachtgever')); ?>" alt="<?php echo get_the_title(get_field('opdrachtgever')); ?>">
                </div>
                <div class="project-opdrachtgever">
                  <?php echo get_the_title(get_field('opdrachtgever')); ?>
                </div>
                <div class="project-titel">
                  <?php the_title(); ?>
                </div>
                <div class="background-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
