<?php /*Template Name: Коммерческая недвижимость*/ ?>
<?php get_header(); ?>

<div class="container-fluid commercial">

  <!-- start: шапка страницы с большим баннером -->
  <div class="row">
      <div class="col-md-12 commercial__headers">
          <div class="container">
              <div class="row">
                  <h1 class="col-md-8">Продажа коммерческой недвижимости<br>в Краснодаре</h1>
              </div>
          </div>
      </div>
  </div>
  <!-- end: шапка страницы с большим баннером -->

  <!-- Хлебные крошки -->
  <div class="row">
    <div class="container">
      <div class="row">
        <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
      </div>
    </div>
  </div>
  <!-- /Хлебные крошки -->

  <div class="row commercial__content">
    <div class="container">
      <!-- start: список коммерческих объектов -->

      <?php include(TEMPLATEPATH . '/template-parts/commercial-objects/content-commercial-objects.php'); ?>

      <!-- end: список коммерческих объектов -->
    </div>
  </div>

</div> <!-- /.container-fluid .commercail -->

<?php get_footer(); ?>