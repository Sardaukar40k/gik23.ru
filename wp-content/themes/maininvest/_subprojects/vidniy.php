<?php /*Template Name: ЖК Видный*/ ?>
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
  <link rel="stylesheet" href="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/libs/animate.css/animate.css" />
  <link rel="stylesheet" href="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/libs/bootstrap/dist/css/bootstrap.css" />

  <link rel="stylesheet" href="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/libs/owl-carousel/owl-carousel/owl.carousel.css">
  <!-- /Бибилиотеки -->

  <!-- Основные стили -->
  <link rel="stylesheet" href="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/css/style.css">
  <!-- /Основные стили -->

  <script src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/libs/jQuery-viewport-checker/dist/jquery.viewportchecker.min.js" defer></script>
  <script src=" <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/js/slowScroll.js" async></script>

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

<div id="wrapper">
  <div class="conatainer-fluid">
    <div class="row">
      <header class="main-header">
        <div class="col-md-12">
          <section class="logo">
            <a href="<?php echo esc_url( get_home_url() ); ?>"><img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/logo.png" alt="Логотип строительной компании &laquo;ГИК&raquo;"></a>
          </section>
          <section class="slogan">
            <h1>Квартиры с видом<br>
              на будущее</h1>
            <div class="phone hidden-xs">
              <p>8 861 203 38 38</p>
              <a href="" data-toggle="modal" data-target="#modal-form">Заказать звонок</a>
            </div>
          </section>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <section class="presentation">
                <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/vidniy-logo.png" alt="" class="vidniy-logo animate-zoom-in animation-hide">
                <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/vidniy.png" alt="" class="render">
                <div class="presentation-bottom"></div>
              </section>
            </div>
          </div>

        </div>
      </header>
    </div>
    <div class="row">
      <section class="buy">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Легко купить</h2>
            </div>
          </div>
          <div class="row">
            <div class="buy-item">
              <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/ipoteka.png" alt="">
              <h3>Ипотека</h3>
              <div class="divider"></div>
              <p>Ипотека всего от 9,5% годовых, работа с 23 банками-партнерами, индивидуальные ипотечные программы</p>
            </div>
            <div class="buy-item">
              <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/voennay.png" alt="">
              <h3>Военная<br>ипотека</h3>
              <div class="divider"></div>
              <p>Для оформления достаточно паспорта и военного сертификата</p>
            </div>
            <div class="buy-item">
              <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/matcapital.png" alt="">
              <h3>Материнский<br>капитал</h3>
              <div class="divider"></div>
              <p>Вашему ребенку больше 3-х лет? Купите квартиру в ЖК «Видный» по материнскому капиталу</p>
            </div>
            <div class="buy-item">
              <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/gosprogramma.png" alt="">
              <h3>Государственная<br>программа</h3>
              <div class="divider"></div>
              <p>Госпрограмма «Жилье для российской семьи» - это квартиры по ценам ниже рыночных с ремонтом и сантехникой.</p>
            </div>
            <div class="buy-item">
              <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/rassrochka.png" alt="">
              <h3>Беспроцентная<br>рассрочка</h3>
              <div class="divider"></div>
              <p>Рассрочка без процентов. Живите сейчас – платите в течение 6 месяцев.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </section>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <section class="reason">
              <div class="reason-item animate-fade-left animation-hide">
                <h2>Легко работать<span>В ЖК «Видный» 4000 м2 коммерческой недвижимости. А это:</span></h2>
                <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/reason-item-icon-1.jpg" alt="">
                <ul>
                  <li>Грамотные инвестиции в недвижимость</li>
                  <li>Возможность открыть свое дело в собственном дворе</li>
                  <li>Стабильный доход</li>
                  <li>Работа рядом с домом</li>
                  <li>Реализация бизнес-идей</li>
                </ul>
              </div>
              <div class="reason-item animate-fade-right animation-hide">
                <h2>Легко жить</h2>
                <img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/reason-item-icon-2.jpg" alt="">
                <ul>
                  <li>Магазины и супермаркеты</li>
                  <li>Салоны красоты</li>
                  <li>Банки </li>
                  <li>Фитнес-клубы</li>
                  <li>Кафе и рестораны</li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <section class="section map hidden-map">
        <h2 class="map-trigger">Легко доехать</h2>
        <a class="dg-widget-link" href="http://2gis.ru/krasnodar/profiles/70000001017331358,70000001018566977/center/39.03276050000001,45.09095638226749/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Краснодара</a><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":45.09095638226749,"lon":39.03276050000001,"zoom":15},"opt":{"city":"krasnodar"},"org":[{"id":"70000001017331358"},{"id":"70000001018566977"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
      </section>
    </div>
    <div class="row">
      <div class="tech-about-content">
        <div class="row">
          <section class="form-middle">
            <h2>Оставьте номер телефона</h2>
            <h3>И мы выйдем на связь в удобное для Вас время</h3>
            <?php echo do_shortcode('[contact-form-7 id="2825" title="Форма - ЖК Видный"]'); ?>
            <p>Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
          </section>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <section class="tech">
                <h2>Технологии строительства</h2>
                <section class="tech-plane animate-fade-left animation-hide">
                  <h3>Планы типового этажа</h3>
                  <a href="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/plane-full.jpg"><img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/plane.png" alt="Планировка ЖК Видный"></a>
                  <a href="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/plane-2-full.jpg"><img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/plane-2.png" alt="Планировка ЖК Видный"></a>
                </section>
                <section class="tech-materials animate-fade-right animation-hide">
                  <h3>Материалы</h3>

                  <div class="tech-materials-item">
                    <p><img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/materials-icon-1.png" alt=""> Строительство по монолитно-кирпичной технологии</p>
                  </div>
                  <div class="tech-materials-item">
                    <p><img src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/img/materials-icon-2.png" alt=""> Фундамент - монолитная ж/б плита толщиной 800 мм</p>
                  </div>
                  <div class="tech-materials-constr">
                    <h3>Конструктив</h3>
                    <ul>
                      <li>Высота первого офисного этажа – 3 м</li>
                      <li>2 лифта грузоподъемностью 400 и 1000 кг</li>
                      <li>Противопожарные двери лифтовые</li>
                    </ul>
                    <ul>
                      <li>Фундамент - монолитная ж/б плита      толщиной 800 мм</li>
                      <li>Толщина наружной стены – 370 мм</li>
                      <li>Перегородки – 200 мм</li>
                      <li>Межкомнатные перегородки – 100 мм</li>
                    </ul>
                  </div>
                </section>
                <div class="clearfix"></div>
              </section>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <section class="about">
                <h2>Кто строит?</h2>
                <div class="about-text">
                  <p>Застройщик комплекса – строительная компания «ГИК» – является лидером на строительном рынке Краснодара. Компания работает исключительно по 214 Федеральному закону.</p>
                  <p>Объемы строительства ГИК увеличиваются стремительными темпами: на сегодняшний день у компании помимо ЖК «Видный» 4 проекта: ЖК «Старокубанский», ЖК «Времена года 2», ЖК «Подсолнухи», ЖК «Времена года». Последний комплекс уже сдан в эксплуатацию.</p>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <section class="news">
              <h2>Новости</h2>
              <?php
              $args = array(
                'category_name' => 'vidniy',
                'post_status' => 'publish',
                'posts_per_page' => 5
              );
              $star_news = new WP_Query($args);
              while($star_news->have_posts()) : $star_news->the_post();
                ?>
                <div class="news-item animate-fade-down animation-hide">
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

            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <section class="translation animate-fade-right animation-hide">
              <h2>Онлайн трансляция</h2>
              <script type="text/javascript" src="http://www.devline.ru/js/swfobject.js"></script><script type="text/javascript">var flashvars={ip:"188.162.169.93",port:9786,login:"admin",pass:"admin",uriCamera:"/cameras/2",quality:60,fps:8,sound:false,ptz:false,playOnStart:false,logo:true,lang:"ru",name:""};var params={menu:"false",scale:"noScale",allowFullscreen:"true",allowScriptAccess:"always",bgcolor:"#ffffff"};var attributes={id:"devline_304"};swfobject.embedSWF("http://www.devline.ru/miniflash7.swf","devline_304","640","480","11.2.0","http://www.devline.ru/expressInstall.swf",flashvars,params,attributes);</script>
              <div id="devline_304"></div>

            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <section class="documents">
              <h2>Документация</h2>
              <div class="owl-carousel" id="docs-carousel">
                <?php echo get_field('vidniy-docs'); ?>
              </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <section class="partners">
              <h2>Партнёры</h2>
              <div class="owl-carousel" id="partners-carousel">
                <?php
                $partners = array(
                  'post_type' => 'partners',
                  'publish' => true,
                  'paged' => get_query_var('paged'),
                  'posts_per_page' => '-1'
                );
                $query = new WP_Query($partners);
                while ($query->have_posts()) : $query->the_post();
                  ?>
                  <div>
                    <img src="<?php echo get_field('partner_logo'); ?>" alt="<?php echo get_field('partner_title'); ?>" title="<?php echo get_field('partner_title'); ?>">
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row col-md-6 col-md-offset-3">
          <section class="form-bottom animate-zoom-in animation-hide">
            <h2>Оставьте номер телефона</h2>
            <h3>И мы выйдем на связь в удобное для Вас время</h3>
            <?php echo do_shortcode('[contact-form-7 id="2825" title="Форма - ЖК Видный"]'); ?>
            <p>Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
          </section>
        </div>
      </div>
    </div>

  </div>

  <footer class="main-footer">
    <div class="main-footer-header-bg">

    </div>
    <p>&copy;ООО &laquo;Главная Инвестиционная Компания&raquo;, 2015</p>
  </footer>
</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <section class="form-modal">
          <h2>Оставьте номер телефона</h2>
          <h3>И мы выйдем на связь в удобное для Вас время</h3>
          <?php echo do_shortcode('[contact-form-7 id="2825" title="Форма - ЖК Видный"]'); ?>
          <p>Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
        </section>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<!-- Библиотеки -->
<script src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/libs/bootstrap/dist/js/bootstrap.js"></script>
<script src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/libs/owl-carousel/owl-carousel/owl.carousel.min.js" defer></script>
<!-- /Библиотеки -->

<!-- Основной скрипт -->
<script src="  <?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/vidniy/js/main.js"></script>
<!-- /Основной скрипт -->
</body>

</html>