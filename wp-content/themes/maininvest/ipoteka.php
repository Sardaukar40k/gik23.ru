<?php /*
 Template Name: Ипотека
 */
?>
<?php get_header(); ?>
<div class="container-fluid ipoteka">
    <div class="row">
        <div class="col-md-12 ipoteka__headers">
            <div class="container">
                <div class="row">
                    <h1 class="col-md-7">ипотека в краснодаре от 10,9%<br>
                                        за 2 дня без похода по банкам
                    </h1>
                </div>
                <div class="row">
                    <h2 class="col-md-5">подбор и оформление ипотечной программы в 23 банках</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <!-- Хлебные крошки -->
            <?php get_template_part('content', 'breadcrumbs'); ?>
            <!-- /Хлебные крошки -->
            <div class="row">
                <section class="col-md-10 col-md-offset-1 ipoteka__action--top">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__action-top__img.jpg" alt="Квартира в ипотеку в Краснодаре">
                            <p class="ipoteka__action--top__offer">Получите ипотеку<br><span>имея всего</span><br>100 000 руб</p>
                        </div>
                        <div class="col-md-6 ipoteka__action--top__offer-description">
                            <p>Специальная ипотечная программа от «ГИК»! Оформите ипотеку, имея всего до 100 тыс. руб. Предложение действует до 31 декабря</p>
                        </div>
                    </div>

                </section>
            </div>
            <section class="row ipoteka__reasons">
                <div class="sections-style col-md-12 ">
                    <h2 class="sections-h2">5 причин обратиться к нам:</h2>
                </div>
                    <div class="ipoteka__reasons__item">
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__reason__item__icon-1.jpg" alt="Ипотека 10,9%">
                            <figcaption>минимальная процентная ставка – от 10,9% годовых*</figcaption>
                        </figure>
                    </div>
                    <div class="ipoteka__reasons__item">
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__reason__item__icon-2.jpg" alt="Быстрое рассмотрение заявки на ипотеку">
                            <figcaption>рассмотрение заявки от 2-ух дней;</figcaption>
                        </figure>
                    </div>
                    <div class="ipoteka__reasons__item">
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__reason__item__icon-3.jpg" alt="ипотека в Краснодаре без посещения банка">
                            <figcaption>открытие ипотеки в офисе «ГИК» без посещения банка;</figcaption>
                        </figure>
                    </div>
                    <div class="ipoteka__reasons__item">
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__reason__item__icon-4.jpg" alt="консультация по ипотеке в Краснодаре">
                            <figcaption>бесплатная консультация специалиста по ипотеке; </figcaption>
                        </figure>
                    </div>
                    <div class="ipoteka__reasons__item">
                        <figure>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__reason__item__icon-5.jpg" alt="помощь в сборе документов, необхолдимых для получения ипотеки">
                            <figcaption>помощь в сборе и подготовке документов</figcaption>
                        </figure>
                    </div>
                <div class="col-md-12 ipoteka__reasons__conditions">
                    <p>*Ипотека от «ВТБ» в рамках программы «Первичный взнос с государственной поддержкой».</p>
                    <p>Условия ипотеки: первоначальный взнос от 20%, срок кредита – до 30 лет, максимальная сумма кредита – 3 000 000 рублей.</p>
                </div>
            </section>

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
        </div>
    </div>
    <section class="row ipoteka__specialist">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__specialist__photo.jpg" alt="Специалист по ипотеке в Краснодаре - Малышева Нина" class="img-circle">
                </div>
                <div class="col-md-9 ipoteka__specialist__text">
                    <h2>Нина Малышева<span>специалист по ипотеке</span></h2>
                    <p>Самостоятельно выбрать ипотечную программу непросто. Проанализировать все программы кредитования и выбрать из них наиболее выгодные под силу специалисту, ведь он владеет ситуацией на рынке недвижимости и знает условия кредитования в разных банках.</p>
                    <p>Мы оцениваем кредитоспособность клиента, учитываем его потребности и только после этого подберем ипотечную программу в индивидуальном порядке.</p>
                    <a href="#" data-toggle="modal" data-target="#modal-form">Заказать консультацию</a>
                </div>

            </div>
        </div>
    </section>
    <div class="row">
        <div class="container">



            <section class="row sections-style ipoteka__review">
                <div class="col-md-12">
                    <h2 class="sections-h2">Отзывы наших клиентов</h2>
                </div>

              <div class="reviews-item">
                <img src="http://gik23.ru/main/wp-content/uploads/2015/06/pers_icon2.png" alt="Отзывы о ипотечном центре Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
                <article class="reviews-item-content">
                  <h2>Николайко Ольга Владимировна</h2>
                  <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
                  <p>Спасибо большое специалисту по ипотеке. Очень доступно и понятно рассказала о действующих предложениях и помогла определиться с ипотечной программой. Теперь наслаждаемся собственным жильем, о котором долго мечтали.</p>
                </article>
              </div>

              <div class="reviews-item">
                <img src="http://gik23.ru/main/wp-content/uploads/2015/06/pers_icon2.png" alt="Отзывы о ипотечном центре Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
                <article class="reviews-item-content">
                  <h2>Кондратенко Иван Семенович</h2>
                  <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
                  <p>Всем советую обращаться к специалистам при оформлении ипотеки. Точно не пожалеете. И время сэкономите, и на удочку не попадетесь. Такое дело нужно доверять профессионалам и только им.</p>
                </article>
              </div>

              <div class="reviews-item">
                <img src="http://gik23.ru/main/wp-content/uploads/2015/06/pers_icon2.png" alt="Отзывы о ипотечном центре Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
                <article class="reviews-item-content">
                  <h2>Болубенцева Кристина Александровна</h2>
                  <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
                  <p>Никак не осмеливались взять ипотеку, боялись, что не потянем. Но наткнулись на очень выгодное предложение – всего 10,9 % годовых. В настоящее время таких низких процентов не найти, поэтому долго не думали – взяли! И с оформлением возни не было, банк сразу одобрил ипотеку.</p>
                </article>
              </div>

            </section>



            <section class="ipoteka__warrenty row sections-style">
                <div class="col-md-12">
                    <h2 class="sections-h2">Мы гарантируем 91,7% одобренных заявлений</h2>
                </div>
                <div class="col-md-12">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__warrenty__img.png" alt="Ипотека в Краснодаре от строительной компании ГИК" class="hidden-xs">

                    <div class="ipoteka__warrenty__item visible-xs">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__warrenty__item__icon-1.png" alt="Заявка на открытие ипотеку в Краснодаре">
                            <p>Звоните или оставляйте заявку на сайте</p>
                    </div>
                    <div class="ipoteka__warrenty__item visible-xs">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__warrenty__item__icon-2.png" alt="Оформление ипотеки в офисе Строительной компании ГИК">
                            <p>Приезжайте в офис «ГИК»</p>
                    </div>
                    <div class="ipoteka__warrenty__item visible-xs">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__warrenty__item__icon-3.png" alt="Помощь в сборе документов и открытии ипотеки в Краснодаре">
                            <p>Брокер поможет подобрать ипотечную программу и подготовить документы</p>
                    </div>
                    <div class="ipoteka__warrenty__item visible-xs">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__warrenty__item__icon-4.png" alt="Ипотека от 23 банков в Краснодаре">
                            <p>Подаём заявление в банк и ждем одобрения</p>
                    </div>
                    <div class="ipoteka__warrenty__item visible-xs">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ipoteka/ipoteka__warrenty__item__icon-5.png" alt="Квартира в ипотеку в Краснодаре">
                            <p>Квартира ваша</p>
                    </div>
                </div>

            </section>
        </div>
    </div>

    <section class="row ipoteka__action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ipoteka__action__content">
                    <h2>Только до 31 декабря!<br>
                        Успейте купить готовую квартиру со свидетельством,<br>
                        имея всего <span>до 100 тысяч рублей</span></h2>
                    <?php echo do_shortcode('[contact-form-7 id="2367" title="Основная форма - Страница Ипотеки"]'); ?>
                    <p class="ipoteka__action__content__description">Оставьте заявку и узнайте подробности акции</p>
                </div>
            </div>
        </div>

    </section>
    <div class="row">
        <div class="container">
            <section class="row sections-style">
                <div class="col-md-12 ipoteka__map__header">
                    <h2 class="sections-h2">Как к нам доехать?</h2>
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

<!-- start: Выпадающая форма -->
<?php get_template_part('content', 'popupform'); ?>
<!-- end: Выпадающая форма -->

<?php get_footer(); ?>
