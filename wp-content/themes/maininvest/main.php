<?php /*Template Name: Главная*/ ?>

<?php get_header(); ?>

  <!-- TODO: переписать вёрстку слайдера -->

<div class="container-fluid">

  <!-- start: Баннеры -->
  <div class="row">
        <div class="col-md-12" style="padding: 0;">
            <div id="bannerCarousel" class="carousel slide"  data-ride="carousel">
                <div class="carousel-inner">
                    <?php $banners = array(
                            'post_type' => 'headers',
                            'publish' => true,
                            'paged' => get_query_var('paged'),
                            'post_per_page' => '-1'
                            );
                            $query = new WP_Query($banners);
                            while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="item <?php if ($post->ID == 1865 ) echo 'hot-eigth'; ?> <?php if ($post->ID == 2094) echo 'hot-eigth'; ?> <?php if ($post->ID == 2568) echo 'hot-eigth'; ?> <?php if ($post->ID == 1653) echo 'active'; ?>  " style="background: url('<?php echo get_field('main-banner-img'); ?>') center center no-repeat; background-size: cover;">
                            <div class="container m-caption-wrap">
                                <div class="carousel-caption">
                                  <?php if($post->ID == 1653) : ?>
                                    <h1><?php echo get_field('main-banner-head'); ?></h1><br>

                                  <?php else : ?>
                                    <h2><?php echo get_field('main-banner-head'); ?></h2><br>

                                  <?php endif; ?>

                                    <p><?php echo get_field('main-banner-description'); ?></p><br>
                                    <?php if (get_field('main-banner-link')) : ?>
                                        <a class="btn btn-lg btn-primary" href="<?php echo get_field('main-banner-link'); ?>" role="button">Узнать больше</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <a class="left carousel-control" href="#bannerCarousel" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#bannerCarousel" role="button" data-slide="next">
                    <i class="fa fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
  <!-- end: Баннеры -->

  <!-- start: Верхняя форма -->
  <div class="row">
    <div class="container">

      <?php
      $title = 'Сэкономьте время - закажите консультацию специалиста'; //заголовок формы
      $form = '[contact-form-7 id="2287" title="Основная форма - Главная страница"]'; //шорткод формы
      $form_custom_class = "form_top_front-page";

      include(TEMPLATEPATH . '/content-form.php'); //шаблон формы с переменными
      ?>

    </div>
  </div>
  <!-- end: Верхняя форма -->

  <!-- start: Карусель объектов -->
  <div class="row">
    <div class="container">
      <?php $title = 'Квартиры от застройщика'; ?>
      <?php include(TEMPLATEPATH . '/template-parts/objects/content-objects-carousel.php'); ?>

    </div>
  </div>
  <!-- end: Карусель объектов -->

  <!-- Варианты приобретения квартиры -->
  <?php include(TEMPLATEPATH . '/template-parts/offers/content-offers.php'); ?>
  <!-- /Варианты приобретения квартиры -->

  <div class="row">
    <div class="container" >

      <!-- start: Вопрос-ответ -->
      <?php include(TEMPLATEPATH . '/template-parts/faq/content-faq_main-page.php'); ?>
      <!-- end: Вопрос-ответ -->

      <!-- start: Центральная форма -->
      <?php
      $title = 'Остались вопросы - задайте их менеджеру'; //заголовок формы
      $form = '[contact-form-7 id="2314" title="Основная форма - Главная страница - Центральная"]'; //шорткод формы
      $form_custom_class = "form_middle";

      include(TEMPLATEPATH . '/content-form.php'); //шаблон формы с переменными
      ?>
      <!-- end: Центральная форма -->

    </div>
  </div>

  <!-- Гарании нашей надёжности -->
  <?php get_template_part('content', 'warranty'); ?>
  <!-- /Гарании нашей надёжности -->


  <div class="row">
    <div class="container" >

      <!-- start: Отзывы -->
      <div class="row">
      <section class="comments sections-style">
          <h2 class="sections-h2 text-center">Нашу надежность подтверждают наши клиенты</h2>

          <?php
          $reviews = array(
            'posts_per_page' => 2,
            'post_type' =>'review',
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
            'nopaging' => false
          );

          query_posts($reviews);

          if (have_posts()) : while (have_posts()) :the_post(); ?>

            <?php include(TEMPLATEPATH . '/template-parts/reviews/content-reviews.php' ); //Цикл отзывов ?>

            <?php endwhile; ?>

              <?php wp_reset_postdata(); //ресет глобальной переменной ?>

          <?php endif; ?>

          <div class="clearfix"></div>

          <div class="all-comments">
            <p class="text-left"><a href="otzyvy/">Все отзывы</a></p>
          </div>

        </section>
    </div>
      <!-- end: Отзывы -->

      <!-- start: Партнёры -->
      <?php
        $block_title = 'Наши партнёры';
        $partners = array(
        'post_type' => 'partners',
        'publish' => true,
        'posts_per_page' => '-1'
      );
        include(TEMPLATEPATH . '/template-parts/partners/content-partners.php');
      ?>
      <!-- end: Партнёры -->

      <!-- start: Последние новости -->
      <div class="row">
      <section class="sections-style hidden-xs">
        <h2 class="sections-h2 text-center">Свежие новости</h2>
        <div class="clearfix"></div>

        <?php include(TEMPLATEPATH . '/template-parts/news/news_main.php'); ?>

        <div class="clearfix"></div>
      </section>
    </div>
      <!-- end: Последние новости -->

      <!-- start: Сертефикаты -->
      <div class="row">

        <section class="sections-style certificates">
          <h2 class="sections-h2 text-center">Сертификаты и награды</h2>

          <?php include(TEMPLATEPATH . '/template-parts/certeficates/content-certeficates.php'); //шаблон карусели сертефикатов ?>

        </section>
      </div>
      <!-- end: Сертефикаты -->

    </div>
  </div>

  <!-- start: Нижняя форма -->
  <div class="row">
    <div class="container">

      <?php
      $title = 'Вы нашли, что искали?'; //заголовок формы
      $subtitle = 'Если нет, то наш менеджер свяжется с вами в течении 15 минут'; // подзаголовок формы
      $form = '[contact-form-7 id="2290" title="Основная форма - Главная страница - Нижняя"]'; //шорткод формы
      $form_custom_class = "form_bottom";

      include(TEMPLATEPATH . '/content-form.php'); //шаблон формы с переменными
      ?>

    </div>
  </div>
  <!-- end: Нижняя форма -->

  <!-- start: Карта -->
  <div class="row">
      <section class="map_main">

        <?php include(TEMPLATEPATH . '/template-parts/maps/content-map_office.php'); // шаблон карты с отметкой главного офиса ?>

      </section>
  </div>
  <!-- end: Карта -->

</div> <!-- /.container-fluid -->

<?php get_footer(); ?>