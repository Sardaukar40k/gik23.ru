<?php /*Template Name: Команда*/ ?>
<?php get_header(); ?>
<section class="page page_team">

  <div class="container-fluid">
    <div class="row">
      <div class="container">

        <!-- Заголовок страницы - изображение -->
        <div class="row">
          <section class="page-logo">
            <?php the_post_thumbnail(); ?>
          </section>
        </div>
        <!-- /Заголовок страницы - изображение -->

        <!-- Хлебные крошки -->
        <div class="row">
          <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
        </div>
        <!-- /Хлебные крошки -->

        <!-- Список руководителей -->
          <div class="row">
            <section class="leadership-list section-block">
              <h2 class="section-block-header">Руководство</h2>
              <div class="clearfix"></div>
              <?php include(TEMPLATEPATH . '/template-parts/team/team-leadership-loop.php'); ?>
              <div class="clearfix"></div>
            </section>
          </div>
        <!-- /Список руководителей -->

        <!-- Список руководителей отделами -->
        <div class="row">
          <section class="chiefs-list section-block">
            <h2 class="section-block-header">Руководители отделов продаж</h2>
            <div class="clearfix"></div>
            <?php include(TEMPLATEPATH . '/template-parts/team/team-chiefs-loop.php'); ?>
            <div class="clearfix"></div>
          </section>
        </div>
        <!-- /Список руководителей отделами -->

        <!-- Список менеджеров -->
        <div class="row">
          <section class="managers-list section-block">
            <h2 class="section-block-header">Менеджеры по продажам</h2>
            <div class="clearfix"></div>
            <?php include(TEMPLATEPATH . '/template-parts/team/team-managers-loop.php'); ?>
            <div class="clearfix"></div>
          </section>
        </div>
        <!-- /Список менеджеров -->

      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
