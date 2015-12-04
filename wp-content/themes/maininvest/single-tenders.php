<?php get_header(); ?>

<section class="tenders-single page">
  <div class="container">

    <!-- Хлебные крошки -->
    <div class="row">
      <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
    </div>
    <!-- /Хлебные крошки -->

    <!-- Контент -->
    <div class="row">
      <section class="tenders-single-content">
        <p class="tenders-single-content-deadline">Сроки проведения: <?php echo get_field('tender-deadline'); ?></p>
        <h1><?php echo get_field('tender-name'); ?></h1>
        <p class="tenders-single-content-adress"><?php echo get_field('tender-adress'); ?></p>
        <div class="tenders-single-content-subject">
          <h2>Предмет тендера</h2>
          <p><?php echo get_field('tender-subject'); ?></p>
        </div>
        <div class="tenders-single-content-object">
          <h2>Наименование обекта</h2>
          <p><?php echo get_field('tender-object'); ?></p>
        </div>


        <?php if(is_user_logged_in()) : //проверка авторизации пользователя ?>

        <div class="tenders-single-content-files">
          <h2>Файлы для скачивания</h2>
          <?php echo get_field('tender-docs'); ?>
          <div class="clearfix"></div>
        </div>
        <?php get_template_part("content", "form-tenders"); ?>

        <?php else :  //запрос регистрации ?>
          <p class="tenders-single-content-autorize">Чтобы узнать подробней и принять участие в тендере авторизируйтесь или зарегестрируйтесь: </p>
         <p><?php login_with_ajax();?></p>
          <?php include(TEMPLATEPATH . '/content-registration-form.php'); ?>
          <?php include(TEMPLATEPATH . '/content-autorization-form.php'); ?>

        <?php endif; ?>

      </section>
    </div>
    <!-- /Контент -->

    <div class="row">
    <section class="tenders-single-info">
      <p>Уполномоченные сотрудники, к которым можно обратиться для получения разъяснений по вопросам, связанным с предметом тендера: </p>
      <p>Азарян Лилит Альбертовна, <strong>8 (861) 203-38-38, доб. 144, 8 (918) 034-23-80 </strong></p>
    </section>
  </div>

  </div>
</section>

<?php get_footer(); ?>
