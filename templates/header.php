<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<header class="box-shadow bg-white navbar-container">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <?= Navigation\brand( Assets\asset_path("images/brand/imaga.svg"), 140 ); ?>

      <?= Navigation\toggler( '.navbar-toggle' ); ?>

      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 2, "mr-auto nav navbar-nav"); ?>

    </div>
  </nav>

</header>
