<?php /*Template Name: ЖК Старокубанский*/ ?>
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

  <!-- Библиотеки -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/owl-carousel/owl-carousel/owl.carousel.css">
  <!-- /Библиотеки -->

  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/css/starokuban.css">

  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.png" type="image/x-icon" />

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
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-PV9K67');
</script>
<!-- End Google Tag Manager -->

<header class="container-fluid">
  <div class="row head-block">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/starokuban_logo.png" alt="Логотип ЖК Старокубанский"></h1>
        </div>
        <div class="col-md-6 phone">
          <p>8 861 <span>299 61 54</span></p>
          <!-- <a href="">Заказать звонок</a> -->
        </div>
      </div>
    </div>
  </div>
  <nav class="row menu navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars fa-2x">Меню</i>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <div class="nav navbar-nav">
            <ul class="list-unstyled list-inline">
              <li><a href="<?php bloginfo('url'); ?>">Главная</a></li>
              <li><a href="#about">О ЖК Старокубанский</a></li>
              <li><a href="#tech">Технологии строительства</a></li>
              <li><a href="#conditions">Условия</a></li>
              <li><a href="#about-company">О застройщике</a></li>
              <li><a href="#documentation">Документация</a></li>
            </ul>
          </div>
        </div>
    </div>
  </nav>
  <div class="row h-render">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6 h-render-header">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/h-header-img-top.png" alt="">
          <p>Квартиры класса <span>«комфорт+»</span> в</p>
          <h1>ЖК «Старокубанский»</h1>
          <h2>Живите современно<br> в старейшем районе города</h2>
          <div class="h-render-header-adress"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/location.png" alt="">ул.Старокубанская 2/5</div>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/h-header-img-bot.png" alt="">
        </div>
        <div class="col-md-6 col-md-offset-6 h-render-deadline">
          <p><strong>Срок сдачи:</strong><em> 2-е полугодие 2016 г.</em></p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container-fluid main">
  <div class="row">
    <div class="container">
      <section class="row">
        <div class="col-md-12" id="about">
          <h2>А для Вас важно жить в районе, где есть все необходимое?</h2>
          <div id="star_map" style="width: 100%; height: 400px;"></div>
        </div>
      </section>
    </div>
  </div>
  <div class="row m-strucutre">
    <div class="container">
      <section class="row ">
        <div class="col-md-12">
          <h2>Инфраструктура, которая радует</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/structure-img.png" height="63" width="182" alt="">
          <p>Микрорайон Черемушки – один из оживленных мест Краснодара.  Именно его мы выбрали для строительства ЖК «Старокубанский». Район имеет давнюю историю и считается одним из старейших в городе.  А это значит, что инфраструктура здесь вызревала годами -  вы найдете все самое необходимое для полноценного и комфортного проживания.</p>
        </div>
        <div class="col-md-12 m-structure-items">
          <h2>Из приятных мелочей…</h2>
          <div class="col-md-3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/why-icon/why-icon-1.jpg" height="150" width="150" alt="" class="img-circle">
            <div class="divider"></div>
            <h3>Парк «Солнечный остров»</h3>
          </div>
          <div class="col-md-3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/why-icon/why-icon-2.jpg" height="150" width="150" alt="" class="img-circle">
            <div class="divider"></div>
            <h3>ТРЦ «Меридиан»,<br>ТРЦ «Галактика»</h3>
          </div>
          <div class="col-md-3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/why-icon/why-icon-3.jpg" height="150" width="150" alt="" class="img-circle">
            <div class="divider"></div>
            <h3>Рынок</h3>
          </div>
          <div class="col-md-3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/why-icon/why-icon-4.jpg" width="150" alt="" class="img-circle">
            <div class="divider"></div>
            <h3>КубГУ</h3>
          </div>
        </div>
    </section>
   </div>
  </div>
  <div class="row m-form">
    <div class="col-md-12">
      <hgroup>
        <h2>Сэкономьте время - закажите консультацию специалиста</h2>
      </hgroup>
      <?php echo get_field('starokuban-form'); ?>
      <p>Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <section class="row main-dont-scroll text-center">
        <div class="col-md-12">
          <h2>Этот раздел пролистывают, но его стоит почитать</h2>
        </div>
        <div class="col-md-4 main-dont-scroll-item">
          <img class="amimate--scale" src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/dont-scroll-icon/dont-icon-1.png" alt="Варианты планировки в ЖК Старокубанский">
          <h3>Варианты планировки</h3>
          <p>От квартир-студий до шикарных пентхаусов</p>
        </div>
        <div class="col-md-4 main-dont-scroll-item">
          <img class="amimate--scale" src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/dont-scroll-icon/dont-icon-2.png" alt="Подземный паркинг в ЖК Старокубанский">
          <h3>Парковочные места</h3>
          <p>Не беспокойтесь о сохранности своего автомобиля</p>
        </div>
        <div class="col-md-4 main-dont-scroll-item">
          <img class="amimate--scale" src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/dont-scroll-icon/dont-icon-3.png" alt="Панорамный вид на город в ЖК Старокубанский">
          <h3>Панорамный вид на город и парк</h3>
          <p>Любуйтесь пейзажами из окна своей квартиры</p>
        </div>
      </section>
      <section class="row m-about">
        <div class="col-md-12">
          <h2>О ЖК «Старокубанский»</h2>
          <p>ЖК «Старокубанский» — это одноподъездный 17-ти этажный дом класса «комфорт+», расположенный в микрорайоне «Черемушки» по ул. Старокубанская, 2/5. В комплексе находится подземная парковка и множество помещений общественного назначения.
Для жителей учтены все требования для комфортабельного проживания и отдыха.</p>
          <p>Мы предлагаем на выбор как небольшое уютное жилье площадью от 29-59 кв.м, так и просторные 4-х и 7-комнатные квартиры (171-224 кв.м) с террасами и открывающимся видом на город.</p>
          <p>Еще одно достоинство комплекса в том, что в ближайшее время здесь построят трехуровневую транспортную развязку. Это решит проблему с заторами и позволит беспрепятственно добраться в любую точку города.</p>
          <p>Квартиры в «Старокубанском» продаются с начальных этапов строительства.  Мы предлагаем квартиры в ипотеку, рассрочку и на основе материнского капитала.</p>
          <p>ЖК «Старокубанский» будет сдан в эксплуатацию во 2-ом полугодии 2016 года.</p>
        </div>
      </section>
    </div>
  </div>
  <section class="row m-tech" id="tech">
    <div class="container ">
      <div class="row">
        <hgroup>
          <h2>Какие технологии применяются при строительстве комплекса?</h2>
          <h3>Вы покупаете квартиру в доме, выполненном по последним строительным технологиям</h3>
        </hgroup>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="col-md-12 tech-plane">
            <h4>1-этаж</h4>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/plane/plane-1.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/plane/plane-1.jpg" alt="Варианты планировки ЖК Старокубанский - 1-этаж" class="img-responsive"></a>
          </div>
          <div class="col-md-12 tech-plane">
            <h4>Типовой этаж</h4>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/plane/plane-2-6.png"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/plane/plane-2-6.png" alt="Варианты планировки ЖК Старокубанский - Типовой этаж" class="img-responsive"></a>
          </div>
        </div>
        <div class="col-md-8">
          <h4>Материалы:</h4>
          <div class="col-md-6 material-item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/tech/tech-1.png" height="52" width="52" alt="" class="img-circle img-responsive">
            <p>Облицовка здания керамическим кирпичом</p>
          </div>
          <div class="col-md-6 material-item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/tech/tech-2.png" height="50" width="50" alt="" class="img-circle img-responsive">
            <p>Наружные стены – газобетонные блоки толщиной 20 см</p>
          </div>
          <div class="col-md-6 material-item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/tech/tech-3.png" height="50" width="50" alt="" class="img-circle img-responsive">
            <p>Фундамент - монолитная железобетонная плита толщиной 80 см</p>
          </div>
          <div class="col-md-6 material-item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/tech/tech-4.png" height="50" width="50" alt="" class="img-circle img-responsive">
            <p>Скатная кровля</p>
          </div>
          <div class="col-md-6 material-item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/tech/tech-5.png" height="50" width="50" alt="" class="img-circle img-responsive">
            <p>Окна из ПВХ-профиля с однокамерным стеклопакетом</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="row news">
    <div class="container">
      <div class="row">
        <h2>Новости ЖК &laquo;Старокубанский&raquo;</h2>
      </div>
      <div class="row">
        <?php
           $args = array(
             'category_name' => 'starokubanskiy',
             'post_status' => 'publish',
             'posts_per_page' => 5
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
  <section class="row m-translation">
    <div class="container">
      <div class="row">
        <h2>Онлайн трансляция</h2>
      </div>
      <div class="row">
        <script defer type="text/javascript" src="http://www.devline.ru/js/swfobject.js"></script>
        <script defer src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/js/translation.js"></script>
        <div id="devline_578"></div>
      </div>
    </div>
  </section>
  <section class="row m-buy hidden-animate" id="conditions">
    <div class="container">
      <div class="row">
        <h2>Варианты приобретения</h2>
      </div>
      <div class="row">
          <div class="m-buy-item">
            <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/buy/rassrochka.png"  alt="Квартира в рассрочку в ЖК Старокубанский - Краснодар">
            <h3>Рассрочка</h3>
          </div>
          <div class="m-buy-item">
            <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/buy/ipoteka.png"  alt="Квартира в ипотеку в ЖК Старокубанский - Краснодар">
            <h3>Ипотека</h3>
          </div>
          <div class="m-buy-item">
            <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/buy/matcapital.png" alt="Квартира за материнский капитал в ЖК Старокубанский - Краснодар">
            <h3>Материнский<br>капитал</h3>
          </div>
          <div class="m-buy-item">
            <img class="amimate--scale" src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/buy/gosprogramma.png" alt="Квартира по госпрограмме Жилье для российской семьи в ЖК Старокубанский - Краснодар">
            <h3>Госпрограмма</h3>
          </div>
      </div>
    </div>
  </section>
  <div class="row m-form">
    <div class="col-md-12">
      <hgroup>
        <h2>Сэкономьте время - закажите консультацию специалиста</h2>
      </hgroup>
      <?php echo get_field('starokuban-form'); ?>
      <p>Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <section class="row m-feuters">
        <div class="col-md-12">
          <h2>В ближайшем будущем</h2>
          <p>На пересечении улиц Ставропольская и Старокубанская планируется строительство трехуровневой транспортной развязки. Это позволит добраться в любую точку города за максимально короткое время.</p>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/crossroad.jpg" width="50%" alt="" class="img-responsive">
        </div>
      </section>
    </div>
  </div>
  <div class="row m-about-company" id="about-company">
    <div class="container">
      <section class="col-md-7 col-md-offset-5">
        <h2>Кто строит?</h2>
        <p>ООО «Главная Инвестиционная Компания» занимается строительством и инвестициями на рынке недвижимости Краснодара с 2011 года.</p>
        <p>ООО «ГИК» предлагает квартиры в современных жилых комплексах, построенных по последним технологиям. Все микрорайоны имеют благоустроенную прилегающую территорию и условия для комфортного проживания.</p>
        <p>Благодаря тому, что компания не пользуется услугами посредников, вы приобретаете квартиры из первых рук на самых выгодных условиях.</p>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <section class="row m-staff">
        <div class="col-md-12">
          <h2>Слово руководства</h2>
        </div>
        <div class="col-md-3">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/img/starokuban-kubasov.jpg" height="187" width="187" alt="" class="img-circle">
        </div>
        <div class="col-md-9">
          <h3>Кубасов Максим, <span>генеральный директор ООО «ГИК»:</span></h3>
          <p>«ГИК» - относительно молодая строительная компания. Наша история началась в 2011 году, тогда мы вышли на рынок как мощный финансовый инструмент для грамотного стратегического управления крупными инвестиционными проектами. За годы работы мы изучили эту отрасль изнутри и получили для себя четкое понимание того, что хочет покупатель. К тому же у нас сложились прочные деловые отношения с партнерами, мы уверены в них так же, как они уверены в нас. Компания дорожит такими отношениями.</p>
          <p>У нас большой объем строительства в Краснодаре, а за плечами наших партнеров сданные объекты в городе и крае, и их репутация точно так же складывается из качества работы».</p>
        </div>
      </section>
    </div>
  </div>
  <div class="row m-pertners">
    <div class="container">
      <section class="row">
        <h2>Наши партнёры</h2>
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
  <div class="row m-form">
    <div class="col-md-12">
      <hgroup>
        <h2>Сэкономьте время - закажите консультацию специалиста</h2>
      </hgroup>
      <?php echo get_field('starokuban-form'); ?>
      <p>Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
    </div>
  </div>
  <div class="row m-docs" id="documentation">
    <div class="container">
      <section class="row">
        <h2>Документация</h2>
        <div class="owl-carousel" id="m-docs-carousel">
          <?php echo get_field('starokuban-docs'); ?>
        </div>
      </section>
    </div>
  </div>
</div> <!-- /main -->

<footer class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_subprojects/starokubanskiy/img/starokuban_logo.png" alt="Логотип ЖК Старокубанский"></h1>
        </div>
        <div class="col-md-6 phone">
          <p>8 861 <span>299-61-54</span></p>
          <!-- <a href="">Заказать звонок</a> -->
        </div>
        <div class="col-md-12 f-info">
          <p>ООО «Главная Инвестиционная Компания»  /  350072, Краснодарский край, г. Краснодар, ул. им. Евгении Жигуленко, 4  /  ОГРН 1117847282035  /  ИНН 7810833099  /  КПП 231101001</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Библиотеки -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
  <script src=""></script>
<!-- /Библиотеки -->

<!-- Основной скрипт -->
 <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/_subprojects/starokubanskiy/js/starokuban.js"></script>
<!-- /Основной скрипт -->


  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script>ymaps.ready(init);</script>
</body>
</html>