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

  <!-- Бибилотеки -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri () );?>/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri () );?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri ());  ?>/libs/owl-carousel/owl-carousel/owl.carousel.css">
  <!-- /Библиотеки -->

  <!-- Основные стили -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
  <!-- /Основные стили -->

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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

<div class="container-fluid">
  <div class="row">
    <header class="header_new">
      <div class="container">

        <!-- Info -->
        <div class="row">
          <section class="header_new-info">
            <div class="clearfix"></div>

            <div class="header_new-info-logo">
              <a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-xs.png" alt="Строительная компания ГИК"></a>
            </div> <!-- /.header_new-info-logo -->

            <div class="header_new-info-contacts">
              <section class="header_new-info-contacts-phone">
                <p><span>8 988</span> 473-00-67</p>
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

        <!-- Menu -->
        <div class="row">

          <?php include(TEMPLATEPATH . '/tempate-parts/nav/nav.php'); ?>

        </div>
        <!-- /Menu -->

      </div>
    </header>
  </div>
</div>

<div id="wrapper">