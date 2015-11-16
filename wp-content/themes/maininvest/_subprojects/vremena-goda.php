<?php /*Template Name: ЖК Времена года*/ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Библиотеки -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/libs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/libs/owl-carousel/owl-carousel/owl.carousel.css">
  <!-- /Библиотеки -->

  <!-- Основные стили -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/_subprojects/vremena_goda/css/vremena.css">
  <!-- /Основные стили -->

</head>

<body>

<!-- Google Tag Manager -->
<noscript>
  <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PV9K67" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-PV9K67');
</script>
<!-- End Google Tag Manager -->

<header class="container-fluid">
  <div class="row h-logo-phone">
    <div class="container">
      <div class="row">
        <div class="col-md-2 h-logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/logo.png" height="79" width="145" alt="">
        </div>
        <div class="col-md-6 text-center h-menu">
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i class="fa fa-bars fa-2x"></i>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <div class="nav navbar-nav">
                <ul class="list-unstyled list-inline">
                  <li><a href="<?php bloginfo('url'); ?>">О застройщике</a></li>
                  <li><a href="#about">О ЖК</a></li>
                  <li><a href="#contacts">Контакты</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-md-4 text-right h-phone">
          <p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/phone.png" height="24" width="24" alt=""> 8 800 250-83-38</p>
          <a href="#" data-toggle="modal" data-target="#modal-form">Заказать обратный звонок</a>
        </div>
      </div>
    </div>
  </div>
  <section class=" row h-main" id="about">
    <div class="container">
      <div class="row">
        <div class="h-main-headers col-md-12">
          <h1>Жилой комплекс<br><strong>«Времена года»</strong></h1>
          <div class="divider"></div>
          <h2>Готовые квартиры<br>класса «комфорт»</h2>
        </div>
      </div>
    </div>
  </section>
</header>

<div class="container-fluid main">
  <section class="row m-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Галерея</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/jhk-vremena-goda.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/jhk-vremena-goda.jpg" alt="ЖК Времена года - Краснодар"></a>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/full/1.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/cut/1.jpg" alt="ЖК Времена года - литер Осень. Парковка."></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/full/2.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/cut/2.jpg" alt="ЖК Времена года - литер Осень. Детская площадка."></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/full/3.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/cut/3.jpg" alt="ЖК Времена года - литер Осень. Спортивная площадка."></a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/full/4.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/cut/4.jpg" alt="ЖК Времена года - литер Лето. (рендер)"></a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/full/5.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/gallery/cut/5.jpg" alt="ЖК Времена года - литер Осень. (рендер)"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 m-gallery-items">
        </div>
      </div>
    </div>
  </section>
  <section class="row m-season">
    <div class="container">

      <div class="row m-season-autumn">
        <div class="col-md-8 m-season-item">
          <div class="m-season-item-info">
            <h2>Литер <span>"Осень"</span></h2>
            <p class="m-season-item-info-deadline">дом сдан</p>
            <!-- <p class="m-season-item-info-plane"><a href="">Планировки</a></p> -->
            <p class="m-season-item-info-docs"><a href="" data-toggle="modal" data-target="#autumn-docs-modal">Документация</a></p>
          </div>

          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-autumn-img.png" alt="">
        </div>
        <div class="col-md-4 m-season-icon">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-ottom-icon.png" alt="">
        </div>
      </div>

      <div class="row m-season-winter">
        <div class="col-md-8 m-season-item">
          <div class="m-season-item-info">
            <h2>Литер <span>"Зима"</span></h2>
            <p class="m-season-item-info-deadline">дом сдан</p>
            <!--  <p class="m-season-item-info-plane"><a href="">Планировки</a></p> -->
            <p class="m-season-item-info-docs"><a href="" data-toggle="modal" data-target="#winter-docs-modal">Документация</a></p>
          </div>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-winter-img.png" alt="">
        </div>
        <div class="col-md-4 m-season-icon">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-winter-icon.png" alt="">
        </div>
      </div>

      <div class="row m-season-spring">
        <div class="col-md-8 m-season-item">
          <div class="m-season-item-info">
            <h2>Литер <span>"Весна"</span></h2>
            <p>4 квартал 2015 г</p>
            <!--  <p class="m-season-item-info-plane"><a href="">Планировки</a></p> -->
            <p class="m-season-item-info-docs"><a href="" data-toggle="modal" data-target="#spring-docs-modal">Документация</a></p>
          </div>

          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-spring-img.png" alt="">
        </div>
        <div class="col-md-4 m-season-icon spring-icon">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-spring-icon.png" alt="">
        </div>
      </div>

      <div class="row m-season-summer">
        <div class="col-md-8 m-season-item">
          <div class="m-season-item-info">
            <h2>Литер <span>"Лето"</span></h2>
            <p>4 квартал 2015 г</p>
            <!--  <p class="m-season-item-info-plane"><a href="">Планировки</a></p> -->
            <p class="m-season-item-info-docs"><a href="" data-toggle="modal" data-target="#summer-docs-modal">Документация</a></p>
          </div>


          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-summer-img.png" alt="">
        </div>
        <div class="col-md-4 m-season-icon">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-season-spring-summer.png" alt="">
        </div>
      </div>

    </div>
  </section>
  <section class="row m-more">
    <div class="container m-more__container">
      <div class="row">
        <div class="col-md-12">
          <h2>Тут хочется жить</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 m-more-main">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-main-img.png" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 m-more__item-left-1">
          <p>Лифты, отделанные теснённым металлом</p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-icon-1.png" alt="">
        </div>
        <div class="col-md-4 m-more__item-left-2">
          <p>Спортивные площадки с силовыми тренажерами и теннисными столами</p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-icon-2.png" alt="">
        </div>
        <div class="col-md-6 text-right m-more__item-bottom-1">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-icon-3.png" alt=""><p>В 10 минутах ходьбы от гипермаркета «Лента»</p>
        </div>
        <div class="col-md-6 text-left m-more__item-bottom-2">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-icon-4.png" alt="" class="clearfix" ><p>Квартиры готовы к проживанию</p>
        </div>
        <div class="col-md-4 m-more__item-right-1">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-icon-6.png" alt=""><p>Гарантия на всю  сантехнику 50 лет </p>
        </div>
        <div class="col-md-4 m-more__item-right-2">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/more-icon-5.png" alt=""><p>Облицовка 1 и 2 этажей рустированным кирпичом</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 m-more__bottom-block">
        </div>
      </div>
    </div>
  </section>
  <section class="row m-offer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Квартиры от  1 650 тыс. руб.<br>
            <span>Что мы предлагаем за эти деньги?</span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 m-offer-other">
          <h3>Недобросовестные застройщики</h3>
          <ul>
            <li>Несоблюдение действующего законодательства и отсутствие разрешительной документации на строительство</li>
            <li>Территория дома не охраняется и не ведется видеонаблюдение</li>
            <li>Дешевые металлопластиковые окна, не сохраняющие тепло</li>
            <li>Пандусы не соответствуют установленным нормам</li>
            <li>Порядок в зонах общего пользования жилого дома не поддерживается</li>
          </ul>
        </div>
        <div class="col-md-6 m-offer-we">
          <h3>Наши объекты</h3>
          <ul>
            <li>Строительство по Федеральному закону №214</li>
            <li>Видеонаблюдение во всех лифтах и по периметру домов </li>
            <li>Окна фирмы NOVOTEX обеспечивают полную шумо- и теплоизоляцию</li>
            <li>Соблюдены все условия для свободного передвижения людей с ограниченными возможностями</li>
            <li>Услуги консьержа, обеспечение чистоты и порядка в подъездах</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="row m-buy">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hgroup>
            <h2>Не хватает на покупку квартиры?</h2>
            <h3>Мы предлагаем различные формы оплаты:</h3>
          </hgroup>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 m-buy__content">
          <div class="m-buy__items">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-buy__icon-1.png" alt="">
            <p>Ипотека</p>
          </div>
          <div class="m-buy__items">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-buy__icon-2.png" alt="">
            <p>Материнский<br>капитал</p>
          </div>
          <div class="m-buy__items">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-buy__icon-3.png" alt="">
            <p>Военная<br>ипотека</p>
          </div>
          <div class="m-buy__items">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-buy__icon-4.png" alt="">
            <p>Рассрочка</p>
          </div>
          <!-- <div class="m-buy__items">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-buy__icon-5.png" alt="">
            <p>Госпрограмма</p>
          </div> -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><a href="#" class="m-buy-button" data-toggle="modal" data-target="#modal-form">Оставить заявку</a></div>
      </div>
    </div>
  </section>
  <section class="row m-staff">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Слово руководства</h2>
        </div>
      </div>
      <div class="row m-staff-content">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/maxim.jpg" height="200" width="170" alt="">
        <div class="m-staff-content-text">
          <h3>Максим Кубасов</h3>
          <h4>Генеральный директор строительной компании «ГИК»:</h4>
          <p>«ГИК» — относительно молодая строительная компания. Наша история началась в 2011 году. За годы работы в сфере недвижимости мы изучили отрасль изнутри и получили для себя четкое понимание того, что хочет покупатель. К тому же у нас сложились прочные деловые отношения с партнерами, мы уверены в них так же, как они уверены в нас. Компания дорожит такими отношениями. На сегодняшний день у нас большой объем строительства в Краснодаре, а за плечами наших партнеров сданные объекты в городе и крае».</p>
        </div>
      </div>
    </div>
  </section>
  <section class="row m-action">
    <div class="container">
      <div class="col-md-12 m-action__content">
        <h2>ВНИМАНИЕ АКЦИЯ</h2>
        <p><strong>Только до 31 декабря!</strong></p>
        <p>Успейте купить готовую квартиру со свидетельством, имея всего до 100 тысяч рублей.</p>
        <p>Оставьте заявку и узнайте подробности акции.</p>
        <?php echo do_shortcode('[contact-form-7 id="2163" title="Форма - ЖК Времена года"]'); ?>
      </div>
    </div>
  </section>
  <section class="row m-map" id="contacts">
    <div class="m-map__adress">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/m-map__adress__img.jpg" width="100%" alt="">
      <address>
        <p class="m-map_adress_city">г.Краснодар<br>ул. Е. Жигуленко, 4</p>
        <p class="m-map_adress_phone">8 800 250-83-38</p>
        <p class="m-map_adress_email">duty_manager@maininvest.ru</p>
      </address>
    </div>
    <a class="dg-widget-link" href="http://2gis.ru/krasnodar/profiles/3237490513561730,3237490513561729,3237490513561727/center/39.00832060688844,45.0953827558692/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Краснодара</a>
    <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":45.0934827558697,"lon":39.00832060688844,"zoom":17},"opt":{"city":"krasnodar"},"org":[{"id":"3237490513561730"},{"id":"3237490513561729"},{"id":"3237490513561727"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
  </section>
</div>

<footer class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-left">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/vremena_goda/img/logo.png" height="79" width="145" alt="">
      </div>
      <div class="col-md-4 copyright">
        <p>ООО «Главная Инвестиционная Компания»</p>
        <p>ОГРН: 1117847282035 / ИНН: 7810833099</p>
      </div>
    </div>
  </div>
</footer>

<!-- modal windows -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <div>
          <h2>Сэкономьте время</h2>
          <h3>Закажите консультацию специалиста</h3>
          <?php echo do_shortcode('[contact-form-7 id="2163" title="Форма - ЖК Времена года"]'); ?>
          <p>Ваши данные останутся в безопасности.<br>Заполнение формы ни к чему Вас не обязывает</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- modal Осень -->
<div class="modal fade" id="autumn-docs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <div class="object-docs">
          <h2>Документация</h2>
          <?php echo get_field('autumn-docs'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- modal Зима -->
<div class="modal fade" id="winter-docs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <div class="object-docs">
          <h2>Документация</h2>
          <?php echo get_field('winter-docs'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- modal Весна -->
<div class="modal fade" id="spring-docs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <div class="object-docs">
          <h2>Документация</h2>
          <?php echo get_field('spring-docs'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- modal Лето -->
<div class="modal fade" id="summer-docs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <div class="object-docs">
          <h2>Документация</h2>
          <?php echo get_field('summer-docs'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->


<?php wp_footer(); ?>
<!-- Библиотеки -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/libs/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
<!-- /Библиотеки -->

<!-- Основной скрипт -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vremena_goda/js/vremena.js"></script>
<!-- /Основной скрипт -->

</body>
</html>