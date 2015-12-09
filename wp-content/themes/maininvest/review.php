<?php /*Template Name: Отзывы*/ ?>
<?php get_header(); ?>

  <section class="page">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <section class="page-logo">
            <?php the_post_thumbnail(); ?>
          </section>
        </div>
      </div>

      <!-- Хлебные крошки -->
      <div class="row">
        <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
      </div>
      <!-- /Хлебные крошки -->

      <section class="reviews" role="main">
        <?php the_title( '<h1 role="banner">', '</h1>'); ?>

        <div class="clearfix"></div>

        <!-- start: Список отзывов -->
        <?php
          $reviews = array(
            'posts_per_page' => 6,
            'post_type' =>'review',
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
            'nopaging' => false
          );

        query_posts($reviews);

        if (have_posts()) : while (have_posts()) :the_post();
        ?>

          <?php include(TEMPLATEPATH . '/template-parts/reviews/content-reviews.php' ); //Цикл отзывов ?>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); //ресет глобальной переменной ?>

        <?php endif; ?>

        <!-- end: Список отзывов -->

        <div class="clearfix"></div>
      </section>

      <?php include(TEMPLATEPATH . '/template-parts/pagination/content-pagination.php'); ?>

    </div>
  </section>

<?php get_footer(); ?>