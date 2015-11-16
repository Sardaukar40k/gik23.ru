<?php /*Template Name: Госпрограмма*/ ?>
<?php get_header(); ?>
    <div class="container-fluid gosprog">
        <div class="row">
            <div class="col-md-12 gosprog__headers">
                <div class="container">
                    <div class="row">
                        <h1 class="col-md-8">Участвуйте в госпрограмме<br>
                            «Жилье для российской семьи»
                        </h1>
                    </div>
                    <div class="row">
                        <h2 class="col-md-6">и получите квартиру с ремонтом и сантехникой в ЖК «Видный»</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">

                <!-- Хлебные крошки -->
                <?php get_template_part('content', 'breadcrumbs'); ?>
                <!-- /Хлебные крошки -->

                <section class="row sections-style gosprog__about">
                    <div class="col-md-12">
                        <h2 class="sections-h2">Что это за программа?</h2>
                        <p>«Жильё для российской семьи» - это государственная программа, которая направлена на улучшение жилищных условий российских семей со средним достатком.</p>
                    </div>
                </section>
            </div>
        </div>
        <section class="row gosprog__advantages">
            <div class="container">
                <div class="row sections-style">
                    <div class="col-md-12">
                        <h2 class="sections-h2">Какие плюсы программы</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 gosprog__advantages__item">
                        <p>Квартиры</p><br>
                        <p>по ценам</p><br>
                        <p>ниже рыночных </p><br>
                        <p>на 20%</p>
                    </div>
                    <div class="col-md-3 gosprog__advantages__item">
                        <p>Жилье</p><br>
                        <p>с ремонтом и</p><br>
                        <p> сантехникой всего</p><br>
                        <p>от 31 907 руб. за м2</p>
                    </div>
                    <div class="col-md-3 gosprog__advantages__item">
                        <p>Государственная</p><br>
                        <p>поддержка граждан</p><br>
                        <p>в приобретении</p><br>
                        <p>собственного жилья</p>
                    </div>
                    <div class="col-md-3 gosprog__advantages__item">
                        <p>Помощь в улучшении</p><br>
                        <p>жилищных условий</p><br>
                        <p>гражданам</p><br>
                        <p>со средним достатком</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <section class="container sections-style gosprog__participate">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="sections-h2">Кто может принять участие?</h2>
                        <h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/gosprog/gosprog__participate__icon.png" alt=""><span>Программа<br>«Жилье для российской семьи»</span></h3>
                    </div>
                </div>
                <div class="row gosprog__participate__content">
                        <div class="gosprog__participate__content__item">Семьи с детьми, где возраст родителей не более 35 лет</div>
                        <div class="gosprog__participate__content__item">Участники программы ипотечного кредитования военнослужащих</div>
                        <div class="gosprog__participate__content__item">Многодетные семьи</div>
                        <div class="gosprog__participate__content__item">Граждане, проживающие в аварийных или признанных непригодными для жизни домах</div>
                        <div class="gosprog__participate__content__item">Получатели материнского капитала</div>
                        <div class="gosprog__participate__content__item">Граждане, состоящие на учете по получению жилья</div>
                        <div class="gosprog__participate__content__item">Госслужащие или работники бюджетных учреждений</div>
                        <div class="gosprog__participate__content__item">Ветераны боевых действий</div>
                </div>
            </section>
        </div>
        <div class="row">
            <div class="container">
                <section class="row sections-style gosprog__wonna">
                    <div class="col-md-12">
                        <h2 class="sections-h2">Хотите принять участие в программе?</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="gosprog__wonna__item">
                            <p><span>1.</span>Обратитесь в органы местного самоуправления по месту прописки</p>
                        </div>
                        <div class="gosprog__wonna__item gosprog__wonna__item--2">
                            <p><span>2.</span>Соберите все необходимые документы</p>
                        </div>
                        <div class="gosprog__wonna__item gosprog__wonna__item--3">
                            <p><span>3.</span>Напишите заявление на вступление в программу</p>
                        </div>
                        <div class="gosprog__wonna__item gosprog__wonna__item--4">
                            <p><span>4.</span>Получите постановление о включении вас в список участников программы</p>
                        </div>
                        <div class="gosprog__wonna__item gosprog__wonna__item--5">
                            <p><span>5.</span>Заключите договор в офисе «ГИК»</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row gosprog__specialist">
            <div class="container">
                <section class="row">
                    <div class="col-md-2 text-center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/gosprog/gosprog__specialist__photo.jpg" alt="" class="img-circle">
                    </div>
                    <div class="col-md-9 col-md-offset-1 gosprog__specialist__text">
                        <h2>Британ Ирина<span>специалист по гос программе</span></h2>
                        <p>Возникли вопросы?</p>
                        <p>Обращайтесь ко мне за консультацией.</p>
                        <!-- <a href="">Заказать консультацию</a> -->
                        <a href="#" data-toggle="modal" data-target="#modal-form">Заказать консультацию</a>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <section class="row sections-style gosprog__why">
                    <div class="col-md-12 gosprog__why__text">
                        <h2 class="sections-h2">Почему стоит обратиться в «ГИК»?</h2>
                        <p>Для реализации госпрограммы «Жилье для российской семьи» в Краснодарском крае были представлены уникальные жилищные проекты и объекты. В конкурсе приняли участие 15 застройщиков Краснодара.</p>
                        <p>Строительная компания «ГИК» презентовала свой новый проект, ЖК «Видный», и стала одним из победителей отбора.</p>
                        <p>В госпрограмме участвует только 5 литер <a href="vidnyy/">ЖК «Видный»</a>.</p>
                        <p>Сдача литера в эксплуатацию планируется в <strong>третьем квартале 2017 года.</strong</p>
                    </div>
                </section>

                <section class="row sections-style gosprog__documentation">
                    <div class="col-md-12">
                        <h2 class="sections-h2">Документация</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel about-docs" id="about-docs-carusel">
                            <?php echo get_field('documentation'); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>

      <!-- start: Нижняя форма -->
      <div class="row">
        <div class="container">

          <?php
          $title = 'Не нашли, что искали?'; //заголовок формы
          $subtitle = 'Оставьте заявку и наш менеджер свяжется с Вами'; //подзаголовок формы
          $form = '[contact-form-7 id="2355" title="Основная форма - Страница Госпрограммы"]'; //шорткод формы
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

    <!-- start: Выпадающая форма -->
    <?php get_template_part('content', 'popupform'); ?>
    <!-- end: Выпадающая форма -->

<?php get_footer(); ?>