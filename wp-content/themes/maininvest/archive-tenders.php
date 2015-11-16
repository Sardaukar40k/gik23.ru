<?php /*Template Name: Тендеры */ ?>

<?php get_header(); ?>

<div class="container-fluid page tenders">

  <div class="row">
    <div class="col-md-12 tenders-headers">
      <div class="container">
        <div class="row">
          <h1>Тендеры</h1>
          <h2>Приглашаем вас принять участие в тендерах, проводимых нашей компанией.</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- start: хлебные крошки -->
  <div class="row">
    <div class="container">
      <?php get_template_part('content', 'breadcrumbs'); ?>
    </div>
  </div>
  <!-- end: Хлебные крошки -->

  <!-- Контент -->
  <div class="row">
    <div class="container">
      <?php include(TEMPLATEPATH . '/template-parts/tenders/content-tenders_list.php') ?>
    </div>
  </div>
  <!-- /Контент -->

</div>

<?php get_footer(); ?>