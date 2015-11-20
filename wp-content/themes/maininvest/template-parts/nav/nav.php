<section class="header_new-menu">

  <nav role="navigation" >
    <!-- nav-header -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle xs-menu-toggle" data-toggle="collapse" data-target="#main-menu">
        <i class="fa fa-bars fa-2x"></i>
      </button>
    </div>
    <!-- /nav-header -->

    <!-- nav-body -->
    <div class="collapse navbar-collapse" id="main-menu">

      <!-- desktop -->
      <div class="nav navbar-nav hidden-xs">
        <?php wp_nav_menu(
            array(
                'theme_location'  => 'main-menu',
                'menu_id'         => '',
                'container'       => false,
                'menu_class'      => 'main-menu'
            )
        ); ?>
      </div>
      <!-- /desktop -->

      <!-- mobile -->
      <div class="nav navbar-nav visible-xs">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'xs-menu',
                'menu_id'         => '',
                'container'       => false,
                'menu_class'      => 'xs-menu'
            )
        ); ?>

      </div>
      <!-- /mobile -->

    </div>
    <!-- /nav-body -->
  </nav>

</section>