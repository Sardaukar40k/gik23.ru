<?php /*Template Name: Маткапитал*/ ?>
<?php get_header(); ?>
<div class="container-fluid mat">
    <!-- /шапка страницы с большим баннером -->
    <div class="row">
        <div class="col-md-12 mat__headers">
            <div class="container">
                <div class="row">
                    <h1 class="col-md-7">Квартира в Краснодарe<br>по материнскому капиталу</h1>
                </div>
                <div class="row">
                    <h2 class="col-md-2">это просто</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /шапка страницы с большим баннером -->

    <div class="row">
        <div class="container">
  <!-- Хлебные крошки -->
  <div class="row">
    <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
  </div>
  <!-- /Хлебные крошки -->

            <div class="row">
                <section class="sections-style mat-about">
                    <?php the_title('<h2 class="sections-h2">', '</h2>'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div><?php the_content(); ?></div>
                </section>
            </div>
            <section class="row sections-style mat-spend-wrapper">
                <h2 class="sections-h2 text-center">На что  можно потратить материнский капитал?</h2>
                    <div class="col-md-12 mat-spend">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/matcapital/mat-spend-img.jpg" alt="На что  можно потратить материнский капитал?" class="visible-xs img-responsive">
                        <?php echo get_field('matcapital-spend'); ?>
                </div>
            </section>
            <section class="row sections-style">
                <h2 class="sections-h2 text-center">Кто может учавствовать:</h2>
                <div class="col-md-12 mat-who">
                    <?php echo get_field('matcapital-who'); ?>
                </div>
            </section>
            <section class="row sections-style">
                <h2 class="sections-h2 text-center">Размер материнского капитала</h2>
                <div class="col-md-12 mat-grow">
                    <img src="<?php echo get_field('matcapital-grow'); ?>" alt="Размер материнского капитала в 2015 году" title="Размер материнского капитала в 2015 году">
                </div>
            </section>
            <section class="row sections-style mat-offer">
                <h2 class="sections-h2 text-center">Но, согласитесь, намного лучше<br>иметь свою квартиру</h2>
                <div class="col-md-12">
                    <?php echo get_field('mat-offer'); ?>
                </div>
            </section>
            <div class="row">
                <div class="col-md-12">
                    <?php echo get_field('matcapital-objects'); ?>
                </div> 
            </div>
        </div>
    </div>
    <div class="row mat-pay">
        <div class="container">
            <section class="row sections-style">
                <div class="col-md-12">
                    <h2 class="sections-h2 text-center">Варианты оплаты</h2>
                </div>
                <div class="col-md-4 mat-pay__item">
                    <h3>Материнский капитал с рассрочкой</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/matcapital/mat-pay__item__img-1.png" alt="">
                    <!-- <a href="">Узнать подробности</a> -->
                </div>
                <div class="col-md-4 mat-pay__item">
                    <h3>Материнский  капитал с наличным расчетом</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/matcapital/mat-pay__item__img-2.png" alt="">
                    <!-- <a href="">Узнать подробности</a> -->
                </div>
                <div class="col-md-4 mat-pay__item">
                    <h3>Материнский  капитал с ипотекой</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/matcapital/mat-pay__item__img-3.png" alt="">
                    <!-- <a href="">Узнать подробности</a> -->
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <section class="row sections-style mat-docs">
                <div class="col-md-12">
                    <h2 class="sections-h2">Какие документы необходимые для покупки квартиры<br>по материнскому капиталу?</h2>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2 col-md-offset-1 mat-docs__item">
                        <div class="mat-docs__item__img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mat/birth.jpg" height="65" width="42" alt="">
                        </div>
                        <p><b>1.</b> свидетельство о рождении заявителя</p>
                    </div>
                    <div class="col-md-2 mat-docs__item">
                        <div class="mat-docs__item__img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mat/child-birth.jpg" height="86" width="61" alt="">
                        </div>
                        <p><b>2.</b> свидетельство о рождении всех детей;</p>
                    </div>
                    <div class="col-md-2 mat-docs__item">
                        <div class="mat-docs__item__img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mat/maerried.jpg" height="83" width="59" alt="">
                        </div>
                        <p><b>3.</b> свидетельство о заключении браке заявителя</p>
                    </div>
                    <div class="col-md-2 mat-docs__item">
                        <div class="mat-docs__item__img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mat/pasport.jpg" height="72" width="50" alt="">
                        </div>
                        <p><b>4.</b> паспорт</p>
                    </div>
                    <div class="col-md-2 mat-docs__item">
                        <div class="mat-docs__item__img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mat/pens.jpg" height="50" width="68" alt="">
                        </div>
                        <p><b>5.</b> пенсионное страховое свидетельство заявителя и детей</p>
                    </div>
                </div>
            </section>

            <!-- start: Карусель объектов -->
            <div class="row">
                <div class="container">
                    <?php $title = 'Выберите свою квартиру'; ?>
                    <?php include(TEMPLATEPATH . '/template-parts/objects/content-objects-carousel.php'); ?>
                </div>
            </div>
            <!-- end: Карусель объектов -->

        </div>
    </div>

  <!-- start: Гарантии -->
    <?php get_template_part('content', 'warranty'); ?>
  <!-- end: Гарантии -->


  <!-- start: Отзывы -->
  <div class="row">
    <div class="container">
      <div class="row">
        <section class="comments sections-style">
          <h2 class="sections-h2 text-center">Они уже воспользовались материнским капиталом</h2>

          <?php
          $review = array(
            'post_type' => 'review',
            'publish' => true,
            'posts_per_page' => '2',
            'post_in' => array(2336, 744)
          );
          $query = new WP_Query($review);

          while($query -> have_posts()) : $query->the_post(); ?>

            <?php include(TEMPLATEPATH . '/template-parts/reviews/content-reviews.php' ); //Цикл отзывов ?>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); //ресет глобальной переменной ?>


          <div class="clearfix"></div>

        </section>
      </div>
    </div>
  </div>
  <!-- end: Отзывы -->


  <!-- start: Нижняя форма -->
  <div class="row">
    <div class="container">

      <?php
      $title = 'Закажите звонок сейчас'; //заголовок формы
      $subtitle = 'и получите консультацию по материнскому капиталу'; //подзаголовок формы
      $form = '[contact-form-7 id="2327" title="Основная форма - Страница Материнского капитала"]'; //шорткод формы
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

</div>

  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>