<?php /*
 Template Name: Рассрочка
 */
?>
<?php get_header(); ?>
<div class="container-fluid installments">

  <!-- start: шапка страницы с большим баннером -->
  <div class="row">
      <div class="col-md-12 installments__headers">
          <div class="container">
              <div class="row">
                  <h1 class="col-md-7">Квартиры в рассрочку<br>без процентов*</h1>
              </div>
              <div class="row">
                <h2 class="col-md-5">Сроком от 6 до 12 месяцев</h2>
              </div>
              <div class="row">
                <h3>
                  <ul>
                    <li>Без похода в банк и очередей</li>
                    <li>Помощь в сборе документов</li>
                  </ul>
                </h3>
              </div>
          </div>
      </div>
  </div>
  <!-- end: шапка страницы с большим баннером -->
  <div class="row">
    <div class="container">
      <!-- start: хлебные крошки -->
      <?php get_template_part('content', 'breadcrumbs'); ?>
      <!-- end: Хлебные крошки -->
    </div>
  </div>

  <div class="row">
    <div class="container">
    <section class="sections-style row installments__advantages">
      <div class="col-md-12">
        <h2 class="sections-h2">Преимущества рассрочки</h2>
      </div>
      <div class="col-md-4 installments__advantages__item">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/installments/advanteges__icon-1.jpg">
        <p>Без процентных переплат</p>
      </div>

      <div class="col-md-4 installments__advantages__item">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/installments/advanteges__icon-2.jpg">
        <p>Фиксированная плата по тарифу</p>
      </div>

      <div class="col-md-4 installments__advantages__item">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/installments/advanteges__icon-3.jpg">
        <p>Живете сейчас, а платите постепенно</p>
      </div>

      <div class="col-md-12"><a href="#" data-toggle="modal" data-target="#modal-form">Заказать консультацию</a></div>

    </section> <!-- /.installments__advantages -->
    <section class="row sections-style installments__objects">
      <div class="col-md-12">
        <h2 class="sections-h2">Квартира в рассрочку</h2>
      </div>
      <?php
        $args = array (
                  'post_type' => 'objects',
                  'posts_per_page' => '-1',
                  'post__not_in' => array('361')
                );
        $objects = new WP_Query($args);
        while ( $objects -> have_posts() ) : $objects->the_post();
       ?>
          <section class="row installments__objects__item">
            <div class="col-md-3">
              <img src="<?php echo get_field('object-preview'); ?>" alt="<?php echo get_field('
object-title'); ?>">
              <div class="installments__objects__item__beneffit">
                <img src=" <?php echo get_field('object-icon'); ?>" alt="">
                  <p style="background-color: <?php echo get_field('object-benefit-color'); ?>"><?php echo get_field('object-benefit'); ?></p>
              </div>
            </div>
            <div class="col-md-5">
              <h2><?php echo get_field('object-title'); ?></h2>
              <p><?php echo get_field('object_adress'); ?></p>
              <div class="installments__objects__item__text">
                <?php echo get_field('description'); ?>
                <a href="#" data-toggle="modal" data-target="#modal-form">Заказать просмотр <span></span>→</a>
              </div>
            </div>
            <div class="col-md-4 installments__objects__item__map">
              <?php echo get_field('object-map'); ?> <!-- TODO: переписать на уникальное -->
            </div>
          </section>
        <?php endwhile; ?>

    </section>
    <section class="row sections-style installments__how">
      <div class="col-md-12">
        <h2 class="sections-h2">Как получить рассрочку</h2>
        <div class="installments__how__item__wrap--top">
            <div class="installments__how__item">
              <p>1.</p>
              <p>Вы звоните или оставляете заявку</p>
            </div>
            <div class="installments__how__item">
              <p>2.</p>
              <p>Приезжаете к нам в офис</p>
            </div>
            <div class="installments__how__item">
              <p>3.</p>
              <p>Вместе со специалистом по недвижимости подбираете варианты вашей будущей квартиры</p>
            </div>
          </div>
          <div class="installments__how__item__wrap--bottom">
            <div class="installments__how__item">
              <p>4.</p>
              <p>Вносите первоначальный взнос и оформляете договор (ДДУ)</p>
            </div>
            <div class="installments__how__item">
              <p>5.</p>
              <p>Квартира ваша!</p>
            </div>
          </div>
      </div>
      <div class="col-md-12 installments__how__clarification">
        <a href="#" data-toggle="modal" data-target="#modal-form">Заказать консультацию</a>
        <p>* При первоначальном взносе 50% остаток суммы выплачивается в течение 6 месяцев без процентов</p>
        <p>При первоначальном взносе 30% остаток суммы выплачивается в течение 12 месяцев с удорожанием на 16%</p>
      </div>
    </section>

    </div> <!-- /container -->
  </div> <!-- /row -->

  <!-- start: Нижняя форма -->
  <div class="row">
    <div class="container">

      <?php
      $title = 'Консультация специалиста'; //заголовок формы
      $subtitle = 'Оставьте заявку, и наш специалист рассчитает стоимость и сроки выполнения ремонтных работ.'; // подзаголовок формы
      $form = '[contact-form-7 id="2455" title="Заявка со страницы Рассрочка"]'; //шорткод формы
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

</div> <!-- /.installments.container-fluid -->

<!-- start: Выпадающая форма -->
    <?php get_template_part('content', 'popupform'); ?>
<!-- start: Выпадающая форма -->

<?php get_footer(); ?>