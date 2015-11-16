<?php /*Template Name: ЖК Подсолнухи*/ ?>
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
  <!-- Webmaster varifications end -->

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Бибилиотеки -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/libs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/libs/owl-carousel/owl-carousel/owl.carousel.css">
  <!-- /Бибилиотеки -->

  <!-- Основные стили -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/_subprojects/podsolnuhi/css/podsolnuhi.css">
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

<div class="container-fluid">
  <header class="row">
    <div class="container">
      <div class="row logo-phone">
        <div class="col-md-6 text-left">
          <img src="<?php echo esc_url( get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/logo.png" alt="ЖК Подсолнухи" class="logo img-responsive" width="170" height="90">
        </div>
        <div class="col-md-6 text-right">
          <p class="phone"><span>8 861</span> 299 61 54</p>
          <a href="" class="callback-button" data-toggle="modal" data-target="#modal-form-callback">Заказать звонок</a>
        </div>
      </div>
    </div>
    <div class="col-md-12 menu" id="float-menu">
      <div class="container">
        <ul class="list-inline">
          <li><a href="<?php bloginfo(url); ?>">О застройщике</a>
          </li>
          <li><a href="#about">О комплексе</a>
          </li>
          <li><a href="#structure">Инфраструктура</a>
          </li>
          <li><a href="#plane">План жилого комплекса</a>
          </li>
          <li><a href="#appartment">Квартиры</a>
          </li>
          <li><a href="#contacts">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
    <div class="row head-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 text-center">
            <hgroup class="main-headers-block">
              <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/head-decor-top.png" alt="">
              <h1>Малоэтажный жилой комплекс<br><span>«Подсолнухи»</span></h1>
              <h2>Квартиры в экологически чистом районе Краснодара</h2>
            </hgroup>
          </div>
        </div>
      </div>
    </div>
    <div class="row top-park-bg">
      <div class="container">
        <section class="row">
          <div class="container">
            <div class="row silence" id="about">
              <h2>Насладитесь первозданной тишиной</h2>
              <div class="col-md-4">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/family.jpg" alt="" class="img-circle">
                <p>Счастливая семейная жизнь вдали от пробок и городского шума.</p>
              </div>
              <div class="col-md-4">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/rest.jpg" alt="" class="img-circle">
                <p>Ловите рыбу и устраивайте пикники - неподалеку от комплекса находится база отдыха</p>
              </div>
              <div class="col-md-4">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/park.jpg" alt="" class="img-circle">
                <p>«Подсолнухи» находятся за пределами промышленных зон и крупных транспортных магистралей</p>
              </div>
              <div class="col-md-6 text-center silence-form">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/silence-form-bg-after.png" alt="">
                <h3>Квартира в спокойном<br>
              районе города<br>
              всего в 25 минутах<br>
              езды от центра города<br>
            </h3>
                <div class="divider"></div>
                <p><strong>Вы сможете:</strong>
                </p>
                <ul class="list-unstyled">
                  <li>Забыть о шуме машин за окном</li>
                  <li>Наслаждаться прогулками на свежем воздухе, не выезжая за город</li>
                  <li>Жить в полной гармонии с собой и природой</li>
                </ul>
                <a href="" data-toggle="modal" data-target="#modal-form-view">Оставить заявку<br> на просмотр объекта</a>
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/silence-form-bg-after.png" alt="">
              </div>
            </div>
          </div>
        </section>
        <section class="row">
          <div class="container">
            <div class="row" id="structure">
              <div class="col-md-12 text-center">
                <h2>
              ЖК «Подсолнухи» расположен в Прикубанском округе Краснодара в<br>
              8 минутах езды от ул. Российской и 25 минутах езды от ул.Красной
            </h2>
                <div class="map">
                  <a class="dg-widget-link" href="http://2gis.ru/krasnodar/profiles/70000001017185926,70000001017185917,70000001017185929,70000001017185918,70000001007505089,70000001017185919/center/39.024553298950195,45.10946827282534/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Краснодара</a>
                  <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                  <script charset="utf-8">
                    new DGWidgetLoader({
                      "width": 640,
                      "height": 600,
                      "borderColor": "#a3a3a3",
                      "pos": {
                        "lat": 45.10946827282534,
                        "lon": 39.024553298950195,
                        "zoom": 17
                      },
                      "opt": {
                        "city": "krasnodar"
                      },
                      "org": [{
                        "id": "70000001017185926"
                      }, {
                        "id": "70000001017185917"
                      }, {
                        "id": "70000001017185929"
                      }, {
                        "id": "70000001017185918"
                      }, {
                        "id": "70000001007505089"
                      }, {
                        "id": "70000001017185919"
                      }]
                    });
                  </script>
                  <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <section class="row">
      <div class="container">
        <div class="row stucture">
          <h2 class="text-center">
            Развитая инфраструктура<br>
            Все необходимое для комфортной жизни в шаговой доступности
          </h2>
          <div class="col-md-4 structure-item">
            <img class="amimate--scale" src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/structure-item-1.png" alt="">
            <h3>Удобная транспортная развязка</h3>
            <p>К комплексу ведут крупнейшие автомобильные магистрали: Ейское и Ростовское шоссе, Восточная объездная дорога, ул. Российская.</p>
          </div>
          <div class="col-md-4 structure-item">
            <img class="amimate--scale" src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/structure-item-2.png" alt="">
            <h3>Медицина и образование</h3>
            <ul>
              <li>поликлиника №13, краевая клиническая больница;</li>
              <li>школы № 66, 93, </li>
              <li>детские сады № 85, 216.</li>
            </ul>
          </div>
          <div class="col-md-4 structure-item">
            <img class="amimate--scale" src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/structure-item-3.png" alt="">
            <h3>Магазины и супермаркеты</h3>
            <p>Гипермаркеты «Лента», мегацентр «Красная площадь», супермаркеты «Магнит», «Перекресток»</p>
          </div>
          <a href="" data-toggle="modal" data-target="#modal-form-view">Оставить заявку на просмотр объекта</a>
        </div>
      </div>
    </section>
    <div class="row sky-bg">
      <div class="container">
        <section class="row">
          <div class="container tech">
            <div class="row">
              <hgroup>
                <h2>Какие технологии применяются при строительстве комплекса?</h2>
                <h3>Вы покупаете квартиру в доме, выполненном по последним строительным технологиям</h3>
              </hgroup>
            </div>
            <div class="row">
              <div class="col-md-4">
                <!--<div class="col-md-12">
                  <h4>1-этаж</h4>
                  <a href="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/planirovka.png"><img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/planirovka.png" alt="Планировка первого этажа ЖК Подсолнухи" class="img-responsive"></a>
                </div> -->
                <div class="col-md-12">
                  <h4>Типовой этаж</h4>
                  <a href="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/planirovka_default.png"><img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/planirovka_default.png" alt="Планировка типового этажа ЖК Подсолнухи" class="img-responsive"></a>
                </div>
              </div>
              <div class="col-md-8">
                <h4>Материалы:</h4>
                <div class="col-md-6 material-item">
                  <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/bricks.png" alt="" class="img-circle img-responsive">
                  <p>Наружные стены из кирпича</p>
                </div>
                <div class="col-md-6 material-item">
                  <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/gas-01.png" alt="" class="img-circle img-responsive">
                  <p>Внутренние перегородки – газобетонный блок</p>
                </div>
                <div class="col-md-6 material-item">
                  <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/found-01.png" alt="" class="img-circle img-responsive">
                  <p>Фундамент из ж/б плиты толщиной 500 мм</p>
                </div>
                <div class="col-md-6 material-item">
                  <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/roof-01.png" alt="" class="img-circle img-responsive">
                  <p>Скатная крыша из металлопрофиля</p>
                </div>

                <div class="col-md-12">
                  <h4 class="tech-build">Технология строительства</h4>
                  <p>Монолит-кирпич – это высокий уровень тепло- и звукоизоляции.</p>
                </div>
                <h4 class="tech-constr">Конструктив:</h4>
                <div class="col-md-6">
                  <ul>
                    <li>радиаторы;</li>
                    <li>устройства учета воды;</li>
                    <li>система пожарной безопасности;</li>
                    <li>окна из ПВХ профиля с однокамерным стеклопакетом;</li>
                    <li>высота потолков - 2.7м;</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>счетчики электроэнергии фирмы «ИЭК»;</li>
                    <li>штукатурка стен и перегородок во всех помещениях;</li>
                    <li>стяжка из цемента М150;</li>
                    <li>лифты фирмы «МогилевЛифтМаш»;</li>
                    <li>толщина стен - 560 мм.</li>
                  </ul>
                </div>
                <h4>Предчистовая отделка</h4>
                <p>Не нужно дополнительно штукатурить стены или делать стяжку на полу.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="row plane" id="plane">
          <div class="container">
            <div class="row">
              <h2>План жилого комплекса "Подсолнухи"</h2>
              <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/plane.png" alt="">
              <p data-toggle="tooltip" data-placement="top" title="Литер 6" class="liter-1 liters"></p>
              <p data-toggle="tooltip" data-placement="top" title="Литер 5" class="liter-2 liters"></p>
              <p data-toggle="tooltip" data-placement="top" title="Литер 4" class="liter-3 liters"></p>
              <p data-toggle="tooltip" data-placement="top" title="Литер 3" class="liter-4 liters"></p>
              <p data-toggle="tooltip" data-placement="top" title="Литер 2" class="liter-5 liters"></p>
              <p data-toggle="tooltip" data-placement="top" title="Литер 1" class="liter-6 liters"></p>
              <p>
                ЖК «Подсолнухи» – это 6 пятиэтажных дома.
                <br> В каждом литере есть подвалы и чердаки, которые предусмотрены для технических
                <br> целей и инженерных коммуникаций.
                <br> На 1-5 этажах находятся жилые помещения
                <br> Сдача в эксплуатацию: 5 и 6 литеры – 2-ой квартал 2016 года,
                <br> остальные литеры – 4-й квартал 2018 года.
                <br>
              </p>
              <a href="" class="know-price" data-toggle="modal" data-target="#modal-form-price">Узнать стоимость квартиры</a>
            </div>
          </div>
        </section>
      </div>
    </div>
    <section class="row">
      <div class="container">
        <div class="row">
          <h2>Малоэтажный экологичный комплекс «Подсолнухи»</h2>
          <div class="video col-md-12"></div>
        </div>
      </div>
    </section>
    <div class="family-bg row">
      <div class="container">
        <section class="row arrangement">
          <div class="container">
            <div class="row">
              <h2>Обустройство ЖК «Подсолнухи»</h2>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-park.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Зоны отдыха и фруктовый сад</p>
              </div>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-parking.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Парковочные места</p>
              </div>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-playground.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Спортивные и детские площадки</p>
              </div>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-comunication.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Центральные коммуникации и мусоропровод</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-terr.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Детский сад на территории комплекса</p>
              </div>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-market.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Магазины и салоны красоты на территории</p>
              </div>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-elevator.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Лифт в каждом подъезде</p>
              </div>
              <div class="col-md-3 arr-item">
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/arr-internet.jpg" alt="" class="amimate--scale img-responsive img-circle" width="150">
                <p>Интернет, телефон и видеонаблюдение</p>
              </div>
            </div>
            <div class="row">
              <h2>Квартиры от 36 тыс. руб. за м2</h2>
              <a href="" data-toggle="modal" data-target="#modal-form-price">Узнать стоимость квартиры</a>
            </div>
          </div>
        </section>
        <section class="row finishing">
          <div class="container">
            <div class="row" id="appartment">
              <h2>Варианты отделки квартир</h2>
              <div class="col-md-4">
                <h3>
              Базовый<br>
              <small>(предчистовая отделка)</small>
            </h3>
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/finishing-1.jpg" alt="" class="img-responsive">
                <a href="" data-toggle="modal" data-target="#modal-form-price">Рассчитать стоимость</a>
              </div>
              <div class="col-md-4">
                <h3>
              Комфорт<br>
              <small>(декоративный ремонт «под ключ»)</small>
            </h3>
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/finishing-2.jpg" alt="" class="img-responsive">
                <a href="" data-toggle="modal" data-target="#modal-form-price">Рассчитать стоимость</a>
              </div>
              <div class="col-md-4">
                <h3>
              All inclusive <br>
              <small>(квартиры с ремонтом и мебелью)</small>
            </h3>
                <img src="<?php echo esc_url (get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/finishing-3.jpg" alt="" class="img-responsive">
                <a href="" data-toggle="modal" data-target="#modal-form-price">Рассчитать стоимость</a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <section class="row banks">
      <div class="container">
        <div class="row">
          <h2>Ипотека от банков:</h2>
          <div id="banks-podsolnuhi-carusel" class="owl-carousel pod-part-carousel">
            <div>
              <img src="<?php echo get_field('partner_logo', 413); ?>" alt="<?php echo get_field('partner_title', 413) ?>" title="<?php echo get_field('partner_title', 413) ?>">
            </div>
            <div>
              <img src="<?php echo get_field('partner_logo', 1158); ?>" alt="<?php echo get_field('partner_title', 1158) ?>" title="<?php echo get_field('partner_title', 1158) ?>">
            </div>
            <div>
              <img src="<?php echo get_field('partner_logo', 625); ?>" alt="<?php echo get_field('partner_title', 625) ?>" title="<?php echo get_field('partner_title', 625) ?>">
            </div>
          </div>
          <a href="" data-toggle="modal" data-target="#modal-form-callback">
            Узнайте о специальных условиях приобретения жилья<br>
            <div class="bank-more-divider"></div>
            <span>Получить консультацию специалиста</span>
          </a>
        </div>
      </div>
    </section>
    <section class="row">
      <div class="container">
        <div class="row">
          <h2>Документация</h2>
             <div id="docs-podsolnuhi-carusel" class="owl-carousel pod-docs-carousel">
             <?php echo get_field('podsolnuhi-docs'); ?>
          </div>
        </div>
      </div>
    </section>
    <section class="row">
      <div class="container">
        <div class="row">
          <h2>Наши партнёры</h2>
          <div id="partners-podsolnuhi-carusel" class="owl-carousel text-center">
            <div>
              <img src="<?php echo get_field('partner_logo', 608); ?>" alt="<?php echo get_field('partner_title', 608) ?>" title="<?php echo get_field('partner_title', 608) ?>">
            </div>
            <div>
              <img src="<?php echo get_field('partner_logo', 623); ?>" alt="<?php echo get_field('partner_title', 623) ?>" title="<?php echo get_field('partner_title', 623) ?>">
            </div>
          </div>
        </div>
      </div>
    </section>
  <section class="row news">
    <div class="container">
      <div class="row">
        <h2>Новости ЖК &laquo;Подсолнухи&raquo;</h2>
      </div>
      <div class="row">
        <?php
        $args = array(
          'category_name' => 'podsolnuhi',
          'post_status' => 'publish',
          'posts_per_page' => 4
        );
        $star_news = new WP_Query($args);
        while($star_news->have_posts()) : $star_news->the_post();
          ?>
          <div class="news-item">
            <a href="<?php the_permalink(); ?>">
              <?php
              $media = get_attached_media('image', $POST->ID);
              $media = array_shift($media);

              $image_id = $media->ID;

              $post_image_medium = image_downsize($image_id, 'medium');

              echo '<img src="' . $post_image_medium[0] . '" alt="' .  get_the_title() . '" title="' . get_the_title() . '" >'
              ?>
              <div class="item-caption"></div>
            </a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></time></p>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
    <section class="row buy">
      <div class="container">
      <div class="row">
        <h2>Варианты приобретения</h2>
      </div>
      <div class="buy-item">
        <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/buy/buy-icon-1.png" alt="">
        <p>Рассрочка</p>
      </div>
      <div class="buy-item">
        <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/buy/buy-icon-2.png" alt="">
        <p>Ипотека</p>
      </div>
      <div class="buy-item">
        <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/buy/buy-icon-3.png" alt="">
        <p>Материнский<br>капитал</p>
      </div>
      <div class="buy-item">
        <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/buy/buy-icon-4.png" alt="">
        <p>Госпрограмма</p>
      </div>
      <div class="buy-item">
        <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/podsolnuhi/img/buy/buy-icon-5.png" alt="">
        <p>Военная<br>ипотека</p>
      </div>
      </div>
    </section>

    <section class="row faq">
      <div class="container">
        <div class="row">
          <h2>Часто задаваемые вопросы:</h2>
          <div class="col-md-12">
            <h3>По какому закону осуществляется строительство?</h3>
            <p>Все строительные объекты возводятся в согласии с Федеральным законом № 214. Закон защищает права дольщиков и следит за выполнением строительной компании своих обязательств.</p>
          </div>
          <div class="col-md-12">
            <h3>Действуют ли специальные предложения на покупку квартир в ЖК «Подсолнухи»?</h3>
            <p>Да. Вы можете воспользоваться акциями-пакетами «Выгодный», «Экономный» и «Суперипотека».</p>
          </div>
          <div class="col-md-12">
            <h3>Какие варианты оплаты у вас действуют?</h3>
            <p>Мы предлагаем купить квартиру в ипотеку, рассрочку и на основе средств материнского капитала.</p>
          </div>
        </div>
      </div>
    </section>
    <div class="row" id="contacts">
      <div class="main-map">
        <a class="dg-widget-link" href="http://2gis.ru/krasnodar/firm/3237490513560544/center/39.00760173797608,45.09751852548758/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Краснодара</a>
        <div class="dg-widget-link"><a href="http://2gis.ru/krasnodar/center/39.007321,45.093951/zoom/16/routeTab/rsType/bus/to/39.007321,45.093951╎Главная Инвестиционная Компания, ООО, строительная компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Главная Инвестиционная Компания, ООО, строительная компания</a>
        </div>
        <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
        <script charset="utf-8">
          new DGWidgetLoader({
            "width": 640,
            "height": 600,
            "borderColor": "#a3a3a3",
            "pos": {
              "lat": 45.09751852548758,
              "lon": 39.00760173797608,
              "zoom": 16
            },
            "opt": {
              "city": "krasnodar"
            },
            "org": [{
              "id": "3237490513560544"
            }]
          });
        </script>
        <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
      </div>
    </div>
    <div class="row text-center call">
      <h2>Остались вопросы?</h2>
      <a href="#" data-toggle="modal" data-target="#modal-form-callback">Задайте их менеджеру</a>
    </div>

  <!-- modal forms -->
  <div class="modal fade" id="modal-form-callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <div class="form">
            <h2>Оставьте заявку</h2>
            <h3>и наш менеджер свяжется с вами в ближайшее время</h3>
            <?php echo get_field('podsolnuhi-form'); ?>
            <p><i class="fa fa-lock"></i> Ваши данные останутся в безопасности. 100% конфиденциальность.<br>Заполнение формы ни к чему Вас не обязывает.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /callback -->
  <div class="modal fade" id="modal-form-price" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <div class="form">
            <h2>Оставьте заявку</h2>
            <h3>и наш менеджер свяжется с вами в ближайшее время</h3>
            <?php echo get_field('podsolnuhi-form'); ?>
            <p><i class="fa fa-lock"></i> Ваши данные останутся в безопасности. 100% конфиденциальность.<br>Заполнение формы ни к чему Вас не обязывает.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /price -->
  <div class="modal fade" id="modal-form-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <div class="form">
            <h2>Оставьте заявку</h2>
            <h3>и наш менеджер свяжется с вами в ближайшее время</h3>
            <?php echo get_field('podsolnuhi-form'); ?>
            <p><i class="fa fa-lock"></i> Ваши данные останутся в безопасности. 100% конфиденциальность.<br>Заполнение формы ни к чему Вас не обязывает.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /view -->
  <div class="modal fade" id="modal-confidel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <div class="confed">
            <p>1. Размещенная на сайте информация носит ознакомительный характер, может меняться без предварительного уведомления, не является публичной офертой. Для получения подробной информации по телефону 8 (861) 203-38-38</p>
            <p>2. Обработка персональных данных осуществляется только с согласия субъекта о передачи данных. Заполняя графу о персональных данных Вы автоматически соглашаетесь на обработку Ваших персональных данных.</p>
            <p>3. Ваши персональные данные никогда не будут раскрыты или переданы третьим лицам.</p>
            <p>4. Нажатие на кнопку "заказать звонок", а также последующее заполнение тех или иных форм, не накладывает на владельцев сайта никаких обязательств.</p>
            <p>5. Все материалы, размещенные на сайте являются собственностью владельцев сайта, либо  собственностью организаций, с которыми у владельцев сайта есть соглашение о размещении материалов. Копирование любой информации может повлечь за собой уголовное преследование.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /confidel -->
  <!-- /modal forms -->

  <footer class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p class="phone"><span>8 861</span> 299 61 54</p>
          <a href="" class="callback-button" data-toggle="modal" data-target="#modal-form-callback">Заказать звонок</a>
        </div>
        <div class="col-md-4">
          <a href="" data-toggle="modal" data-target="#modal-confidel">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>

<!-- Библиотеки -->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/libs/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
<!-- /Библиотеки -->

<!-- Основной скрипт -->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/podsolnuhi/js/podsolnuhi.js"></script>
<!-- /Основной скрипт -->
</body>
</html>