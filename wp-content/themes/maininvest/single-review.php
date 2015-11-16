<?php get_header(); ?>

<section class="page">
  <div class="container">

    <!-- Хлебные крошки -->
      <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->

    <section class="reviews reviews_full" role="main">

      <?php the_title( '<h1 role="banner"> Отзыв о &laquo;ГИК&raquo;: ', '</h1>'); ?>

      <div class="clearfix"></div>

      <!-- Отзыв -->
      <?php include(TEMPLATEPATH . '/template-parts/reviews/content-reviews_single.php'); ?>
      <!-- /Отзыв -->

      <div class="clearfix"></div>

    </section>

  </div>
</section>

<?php get_footer(); ?>