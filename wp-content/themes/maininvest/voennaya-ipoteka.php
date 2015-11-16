<?php /*
 Template Name: Военная ипотека
 */
?>
<?php get_header(); ?>
<div class="container-fluid voennaya page">
  <div class="row">
    <div class="col-md-12 voennaya__headers">
      <div class="container">
        <div class="row">
          <h1>Ипотека для военных<br>
            в Краснодаре
          </h1>
        </div>
        <div class="row">
          <h2>Всего по 2-ум документам</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <!-- Хлебные крошки -->
      <?php get_template_part('content', 'breadcrumbs'); ?>
      <!-- /Хлебные крошки -->

      <!-- 5 шагов -->
      <section class="row sections-style voennaya-reasons">
        <div class="col-md-12">
          <h2 class="sections-h2">5 шагов до своей квартиры</h2>
        </div>
        <div class="voennaya-reasons-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/reasons/item-icon-1.jpg" alt="">
          <p>1. Звоните или оставляете заявку на сайте </p>
        </div>
        <div class="voennaya-reasons-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/reasons/item-icon-2.jpg" alt="">
          <p>2. Приезжаете к нам в офис</p>
        </div>
        <div class="voennaya-reasons-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/reasons/item-icon-3.jpg" alt="">
          <p>3. Вместе со специалистом по недвижимости подбираете варианты вашей будущей квартиры</p>
        </div>
        <div class="voennaya-reasons-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/reasons/item-icon-4.jpg" alt="">
          <p>4. Заключаете договор, предъявив только паспорт и военный сертификат.</p>
        </div>
        <div class="voennaya-reasons-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/reasons/item-icon-5.jpg" alt="">
          <p>5. Квартира ваша!</p>
        </div>
      </section>
      <!-- 5 шагов -->

      <!-- Форма -->
      <?php
      //переменные для вывода формы из файла content-form.php
        $title = "Наши менеджеры ответят на<br>все интересующие вас вопросы";
        $form = '[contact-form-7 id="3019" title="Основная форма - Страница Военной ипотеки"]';

        //подключение файла формы
        include(TEMPLATEPATH . "/content-form.php"); ?>
      <!-- /Форма -->

      <!-- Причины -->
      <section class="sections-style row voennaya-why">
        <div class="col-md-12">
          <h2 class="sections-h2">Почему стоит выбрать квартиру в &laquo;ГИК&raquo;</h2>
        </div>
        <div class="voennaya-why-item voennaya-why-item_margin-left">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/why/item-icon-1.jpg" alt="">
          <p>1. Открытие ипотеки в офисе компании без похода в банк</p>
        </div>
        <div class="voennaya-why-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/why/item-icon-2.jpg" alt="">
          <p>2. Оформление всего по двум документам</p>
        </div>
        <div class="voennaya-why-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/voennaya/why/item-icon-3.jpg" alt="">
          <p>3.Бесплатные услуги ипотечного брокера</p>
        </div>
      </section>
      <!-- /Причины -->

      <!-- Комплексы -->
      <?php get_template_part('content', 'objects'); ?>
      <!-- Комплексы -->

      <!-- start: Партнёры -->
      <?php
      $block_title = 'Наши партнёры';
      $partners = array(
        'post_type' => 'partners',
        'publish' => true,
        'posts_per_page' => '-1',
        'post__not_in' => array(2617, 2615, 2611, 2558, 623, 621, 6088)
      );
      include(TEMPLATEPATH . '/template-parts/partners/content-partners.php');
      ?>
      <!-- end: Партнёры -->

      <section class="row sections-style voennaya-reviews">
        <div class="col-md-12">
          <h2 class="sections-h2">Отзывы наших клиентов</h2>
        </div>

        <div class="reviews-item">
          <img src="http://gik23.ru/main/wp-content/uploads/2015/05/pers_icon.png" alt="Отзывы о ипотечном центре Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
          <article class="reviews-item-content">
            <h2>Иван Демченко<span>26 лет</span></h2>
            <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
            <p>Купили квартиру по военной ипотеке. Спасибо ГИКу за оперативное оформление сделки! Даже в банк не пришлось идти.</p>
          </article>
        </div>

        <div class="reviews-item">
          <img src="http://gik23.ru/main/wp-content/uploads/2015/05/pers_icon.png" alt="Отзывы о ипотечном центре Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
          <article class="reviews-item-content">
            <h2>Сергей Гавриленко<span>28 лет</span></h2>
            <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
            <p>Интересовала квартира на улице Старокубанской. Строительная компания «ГИК» предложила именно в этом районе. Квартиру купили по военной ипотеке. Выбором довольны.</p>
          </article>
        </div>

        <div class="reviews-item">
          <img src="http://gik23.ru/main/wp-content/uploads/2015/05/pers_icon.png" alt="Отзывы о ипотечном центре Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
          <article class="reviews-item-content">
            <h2>Ярослав Писаренко<span>26 лет</span></h2>
            <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
            <p>Большое спасибо ипотечному брокеру Малышевой Нине Николаевне за компетентность и профессионализм. Помогла оформить все бумаги, одобрение от банка получили практически сразу.</p>
          </article>
        </div>

      </section>

      <!-- Форма -->
      <?php
      //переменные для вывода формы из файла content-form.php
      $title = "Наши менеджеры ответят на<br>все интересующие вас вопросы";
      $form = '[contact-form-7 id="3019" title="Основная форма - Страница Военной ипотеки"]';

      //подключение файла формы
      include(TEMPLATEPATH . "/content-form.php"); ?>
      <!-- /Форма -->
    </div>
  </div>
  <div class="row voennaya-map">
    <div class="container">
      <section class="sections-style row">
        <div class="col-md-12">
          <h2 class="sections-h2">Как нас найти?</h2>
        </div>
      </section>
    </div>

  </div>
  <!-- start: Карта -->
  <div class="row">
    <section class="map_main">

      <?php include(TEMPLATEPATH . '/template-parts/maps/content-map_office.php'); // шаблон карты с отметкой главного офиса ?>

    </section>
  </div>
  <!-- end: Карта -->
</div>
<?php get_footer(); ?>
