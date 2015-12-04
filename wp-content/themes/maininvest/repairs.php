<?php /*Template Name: Ремонты*/ ?>
<?php get_header(); ?>
<div class="container-fluid page repairs">

  <!-- start: шапка страницы с большим баннером -->
  <div class="row">
      <div class="col-md-12 repairs__headers">
          <div class="container">
              <div class="row">
                  <h1 class="col-md-7">Ремонт квартир &laquo;под ключ&raquo;<br>от застройщика</h1>
              </div>
              <div class="row">
                <h2 class="col-md-2">Доверьте ремонт тем, кто строит города</h2>
              </div>
          </div>
      </div>
  </div>
  <!-- end: шапка страницы с большим баннером -->

  <div class="row">
    <div class="container">
      <!-- Хлебные крошки -->
      <div class="row">
        <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
      </div>
      <!-- /Хлебные крошки -->
    </div>
  </div>

  <div class="row">
    <div class="container">
      <section class="row sections-style repairs__advantages">
        <div class="col-md-12">
          <h2 class="sections-h2">Преимущества</h2>
        </div>
        <div class="col-md-3 repairs__advantages__item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/advanteges__icon-1.jpg">
          <p>15 лет опыта</p>
        </div>
        <div class="col-md-3 repairs__advantages__item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/advanteges__icon-2.jpg">
          <p>238 крупных сданных объектов</p>
        </div>
        <div class="col-md-3 repairs__advantages__item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/advanteges__icon-3.jpg">
          <p>Более 1000 мелкоремонтных работ</p>
        </div>
        <div class="col-md-3 repairs__advantages__item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/advanteges__icon-4.jpg">
          <p>54 квалифицированных специалиста</p>
        </div>
      </section>
      <section class="row sections-style repairs__services">
        <div class="col-md-12">
          <h2 class="sections-h2">Услуги</h2>
        </div>
        <div class="repairs__services__item item-1">
          <div class="repairs__services__item__head">
            <h3>Стандарт</h3>
            <p><strong>5310 руб. за м2<sup>2</sup></strong><br>Материалы предоставляются подрядчиком</p>
          </div>
          <div class="repairs__services__item__body">
            <ul>
              <li>установка натяжных потолков</li>
              <li>облицовка стен и пола санузлов плиткой</li>
              <li>шпатлевка стен и поклейка обоев</li>
              <li>установка дверей</li>
              <li>укладка ламината, линолиума</li>
              <li>монтаж плинтусов</li>
              <li>разводка труб под сантехприборы</li>
              <li>установка ванны, унитаза, смесителей</li>
              <li>установка розеток и выключателей</li>
              <li><strong>цена действительна на квартиру площадью не менее 40 м2</strong></li>
            </ul>
            <a href="" data-toggle="modal" data-target="#modal-form">Рассчитать стоимость</a>
          </div>
        </div>
        <div class="repairs__services__item item-2">
          <div class="repairs__services__item__head">
            <h3>Комфорт</h3>
            <p><strong>от 7300 руб. за м<sup>2</sup></strong></p>
          </div>
          <div class="repairs__services__item__body">
            <ul>
              <li>индивидуальный подход к каждому клиенту</li>
              <li>широкий выбор материалов</li>
              <li>помощь заказчика в приобретении материалов</li>
              <li>индивидуальное расположение сантехприборов</li>
              <li>возможность переноса электроточек и увеличения их количества</li>
              <li>возможность частичного изменения планировки</li>
            </ul>
            <a href="" data-toggle="modal" data-target="#modal-form">Рассчитать стоимость</a>
          </div>
        </div>
        <div class="repairs__services__item item-3">
          <div class="repairs__services__item__head">
            <h3>Премиум</h3>
            <p><strong>от 10 000 руб. за м2<sup>2</sup></strong></p>
          </div>
          <div class="repairs__services__item__body">
            <ul>
              <li>индивидуальный подход к каждому клиенту</li>
              <li>возможность перепланировки помещения</li>
              <li>разработка цветовых решений в интерьере</li>
              <li>услуги дизайнера (оплачиваются дополнительно)</li>
              <li><strong>рассчёт сметы осуществляется после разработки и согласования дизайн-проекта</strong></li>
            </ul>
            <a href="" data-toggle="modal" data-target="#modal-form">Рассчитать стоимость</a>
          </div>
        </div>
      </section> <!-- /repairs__services -->

      <section class="row sections-style repairs__responsible">
        <div class="col-md-12">
          <h2 class="sections-h2">
            Ответственный за проект
          </h2>
        </div>
        <div class="col-md-3 repairs__responsible__photo">
          <img src="<?php echo esc_url ( get_template_directory_uri() ) ?>/img/repairs/responsible__photo.jpg" alt="">
        </div>
        <div class="col-md-9 repairs__responsible__about">
          <h3>Андрей Бузов,<span> 38 лет</span></h3>
          <ul>
            <li>Генеральный партнер строительной компании &laquo;ГИК&raquo;</li>
            <li>Владелец и руководитель компании &laquo;ЗЮД-ВЕСТ&raquo;</li>
            <li>Высшее инженерное образование</li>
          </ul>
          <p class="repairs__responsible__about__credo">Личное кредо:<br><span>«Я смотрю на проект всесторонне»</span></p>
        </div>
      </section> <!-- /repairs__responsible -->

      <!-- start: Список партнёров -->
      <section class="sections-style row repairs__partners">
        <div class="col-md-12">
          <h2 class="sections-h2">Нам доверяют</h2>
          <div id="partners-carusel" class="owl-carousel">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/ing.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/avto.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/busines.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/forward.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/gmvd.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/ing.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/mika.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/rossgos.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/roven.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/rstel.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/san.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/superv.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/ugavto.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/umk.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/uspeh.png">
            <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/img/repairs/partners/vikond.png">
          </div>
        </div>
      </section>
      <!-- end: Список партнёров -->

      <section class="row sections-style repairs__why">
        <div class="col-md-6 repairs__why__without">
          <h2>Без нас <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/without.png" height="23" width="16"></h2>
          <ul>
            <li>Отсутствие каких-либо гарантий</li>
            <li>Предоплата за работу и материалы</li>
            <li>Самоучки или приезжие эмигранты</li>
            <li>Отсутствие планирования и некачественная работа</li>
            <li>Затянутые сроки</li>
          </ul>
        </div>
        <div class="col-md-6 repairs__why__with">
          <h2>С нами <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/with.png" height="24" width="16"></h2>
          <ul>
            <li>Даем гарантии на качество работ</li>
            <li>Предоплата 50% только за материалы</li>
            <li>Профессионалы с высшим образованием</li>
            <li>Четкий и ясный план выполнения ремонта</li>
            <li>Соблюдение сроков</li>
          </ul>
        </div>
      </section> <!-- /repairs__why -->
    </div> <!-- /row -->
  </div> <!-- /container -->

  <!-- start: основная форма -->
  <div class="row ">
    <div class="main-form text-center col-md-12 repairs__form">
      <div class="container">
        <div class="row bottom-form-wrapper">
            <h2>Консультация специалиста</h2>
            <p>Оставьте заявку, и наш специалист рассчитает стоимость и сроки выполнения ремонтных работ</p>
            <?php echo do_shortcode( '[contact-form-7 id="2395" title="Заявка со страницы Ремонты"]' ); ?>
            <p class="form-desc"><i class="fa fa-lock"></i> Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end: основная форма -->

  <div class="row">
    <div class="container">
      <section class="row sections-style repairs__how">
        <div class="col-md-12">
          <h2 class="sections-h2">Как мы работаем</h2>
          <div class="repairs__how__item__wrap--top">
            <div class="repairs__how__item">
              <p>1.</p>
              <p>Вы звоните или оставляете заявку</p>
            </div>
            <div class=" repairs__how__item">
              <p>2.</p>
              <p>С вами связывается наш менеджер и отвечает на все интересукющие вопросы</p>
            </div>
            <div class=" repairs__how__item">
              <p>3.</p>
              <p>К вам бесплатно выезжает сметчик для замера и составления подробного плана работ</p>
            </div>
            <div class=" repairs__how__item">
              <p>4.</p>
              <p>Вы согласуете сроки и подписываете договор</p>
            </div>
          </div>
          <div class="repairs__how__item__wrap--bottom">
            <div class=" repairs__how__item">
              <p>5.</p>
              <p>Вносите 50%-ую предоплату только на покупку материалов</p>
            </div>
            <div class=" repairs__how__item">
              <p>6.</p>
              <p>Мы выполняем все работы и отдаем ключи</p>
            </div>
            <div class=" repairs__how__item">
              <p>7.</p>
              <p>Вы оплачиваете оставшуюся сумму и наслаждаетесь своей уютной квартирой.</p>
            </div>
          </div>
        </div>
      </section> <!-- /repairs__how -->

      <!-- start: Отзывы клиентов -->
      <section class="row sections-style repairs__rewiev">
        <div class="col-md-12">
          <h2 class="sections-h2">Отзывы наших клиентов</h2>
          <div class="row">


            <div class="reviews-item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/rewiev-1.png" alt="Отзывы о Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
              <article class="reviews-item-content">
                <h2>Анна Нестерова,<span> 29 лет</span></h2>
                <p>Нужна была помощь специалистов, так как самостоятельно сделать ремонт затруднялись. Дизайнер провел грамотную консультацию, дал советы по оформлению интерьера и составил проект. Услуги предоставил застройщик, у которого и покупали квартиру - «ГИК». Компания оказывает все виды ремонтных услуг за приемлемую цену. Так что мы сразу же въедем в полностью готовую квартиру.</p>
              </article>
            </div>

            <div class="reviews-item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/rewiev-2.png" alt="Отзывы о Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
              <article class="reviews-item-content">
                <h2>Андрей Огурцов,<span> 41 год</span></h2>
                <p>Спасибо строительной компании «ГИК».  Ремонтная бригада справилась с работой «на отлично».  Все выполнили качественно, профессионально и за короткое время. Ремонтом остался доволен. Уже живем в литере «Осень» в своей красивой и современной квартире.</p>
              </article>
            </div>




          </div>
          <div class="row">

            <div class="reviews-item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/repairs/rewiev-1.png" alt="Отзывы о Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
              <article class="reviews-item-content">
                <h2>Алина Апанасенко,<span> 35 лет</span></h2>
                <p>Купили квартиру в строительной компании «ГИК». Очень не хотелось возиться с отделкой. Оказалось, ремонт можно заказать непосредственно у застройщика. Выбрали капитальный, т.к. хотим сделать небольшую перепланировку в помещении.</p>
              </article>
            </div>

          </div>
        </div>
      </section>
      <!-- end: Отзывы клиентов -->

    </div> <!-- /container -->
  </div> <!-- /row -->

  <!-- start: Нижняя форма -->
  <div class="row">
    <div class="container">

      <?php
      $title = 'Консультация специалиста'; //заголовок формы
      $subtitle = 'Оставьте заявку, и наш специалист рассчитает стоимость и сроки выполнения ремонтных работ'; // подзаголовок формы
      $form = '[contact-form-7 id="2395" title="Заявка со страницы Ремонты"]'; //шорткод формы
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


<!-- start: Выпадающая форма -->
  <?php get_template_part('content', 'popupform'); ?>
<!-- start: Выпадающая форма -->

</div> <!-- /page container-fluid -->

<?php get_footer(); ?>