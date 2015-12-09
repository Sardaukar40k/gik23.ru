<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>

  <!-- Webmaster varifications -->
  <meta name="google-site-verification" content="ie1uuzfrYJsYNx93G8V-X5GbIz5XkaLdMRIAFxIKlfk" />
  <meta name='yandex-verification' content='58990db54ee34bc1' />
  <!-- /Webmaster varifications -->

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Бибилотеки -->
  <!--<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri () );?>/libs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri () );?>/libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri ());  ?>/libs/owl-carousel/owl-carousel/owl.carousel.css">
  <!-- /Библиотеки -->

  <!-- Основные стили -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
  <!-- /Основные стили -->

  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/gik.png" type="image/x-icon">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/gik.png" type="image/x-icon">

</head>
<body>

<!-- Google Tag Manager -->
<noscript>
  <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PV9K67" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PV9K67');
</script>
<!-- End Google Tag Manager -->

<!-- head -->
<header class="header_new">
  <div class="container-fluid">
    <div class="row">
      <div class="container">

        <!-- Info -->
        <div class="row">
          <section class="header_new-info">
            <div class="clearfix"></div>

            <div class="header_new-info-logo">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-xs.png" alt="Строительная компания ГИК">
            </div> <!-- /.header_new-info-logo -->

            <div class="header_new-info-contacts">

              <section class="header_new-info-contacts-phone">

                <?php if( is_page(2424) ) : // если страница "Ремонты" - выводить другой номер телефона ?>

                  <p><span>8 988 </span>473-00-67</p>

                <?php else : ?>

                  <p><span>8 800 </span>250 83 38</p>


                <?php endif; ?>

              </section>

              <section class="header_new-info-contacts-opening-time">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/time.png" alt="Время работы строительной компании ГИК - Краснодар">
                  <p><span>пн-пт:</span> 9:00 - 20:00</p>
                  <p><span>сб-вс:</span> 10:00 - 18:00</p>
              </section>

            </div> <!-- /.header_new-info-phone -->

            <div class="clearfix"></div>
          </section>
        </div>
        <!-- /Info -->

      </div>
    </div>
  </div>

  <section class="menu-default" id="menu">
  <div class="container-fluid">
    <div class="row">
      <div class="container">

        <!-- Menu -->
        <div class="row">
          <section class="header_new-menu">

            <nav role="navigation" >
              <!-- nav-header -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle xs-menu-toggle" data-toggle="collapse" data-target="#main-menu">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/nav/menu_icon.png" alt="Меню">
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
        </div>
        <!-- /Menu -->

      </div>
    </div>
  </div>
  </section>

</header>
<!-- /head -->

<div id="wrapper">