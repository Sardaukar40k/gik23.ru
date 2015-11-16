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
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri () );?>/libs/bootstrap/dist/css/bootstrap.min.css">
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
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PV9K67" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PV9K67');</script>
<!-- End Google Tag Manager -->

<header class="container-fluid header">
  <div class="container">
    <div class="row header__content" itemscope itemtype="http://schema.org/Organization">
      <div class="col-md-4">
        <a itemprop="url" href="<?php echo esc_url( get_home_url() ); ?>"><img itemprop="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-xs.png" class="logo img-responsive" alt="Строительная компания ООО ГИК"></a>
      </div>
      <div class="col-md-4" itemprop="name">
        <h1>Строительная компания "ГИК"</h1>
      </div>
      <div class="col-md-4 text-right header__phones-block">
        <div>
          <p><span itemprop="telephone" class="header__phones-block__light">8 988</span> 473-00-67</p>
        </div>
        <div class="header__phones-block__timetable">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/time.png" alt="Время работы офиса ГИК - Краснодар">
          <p><span>пн-пт:</span> 9:00 - 20:00</p>
          <p>сб-вс: 10:00 - 18:00</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <i class="fa fa-bars fa-2x"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="nav navbar-nav hidden-xs">
              <?php wp_nav_menu( array('theme_location' => 'main-menu' )); ?>
            </div>
            <div class="nav navbar-nav visible-xs">
              <?php wp_nav_menu( array('theme_location' => 'xs-menu' )); ?>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<div id="wrapper">



