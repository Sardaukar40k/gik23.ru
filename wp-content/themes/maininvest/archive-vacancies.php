<?php /*Template Name: Вакансии */ ?>
<?php get_header(); ?>
<div class="container-fluid page vacancies">

  <!-- start: шапка страницы с большим баннером -->
  <div class="row">
    <div class="col-md-12 vacancies__headers">
      <div class="container">
        <div class="row">
          <h1 class="col-md-8">Вакансии</h1>
          <h2>Стань участником, большой и проффесиональной команды</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- end: шапка страницы с большим баннером -->


  <div class="row">
    <div class="container">
      <div class="row">
        <!-- хлебные крошки -->
        <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
        <!-- /Хлебные крошки -->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container vacancies__content">
      <!-- start: список коммерческих объектов -->
      <?php get_template_part('content', 'vacancies-loop'); ?>
      <!-- end: список коммерческих объектов -->
    </div>
  </div>
  <?php get_template_part('content', 'pagination'); ?>

</div> <!-- /.container-fluid .vacancies -->
<?php get_footer(); ?>