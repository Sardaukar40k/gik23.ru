
<?php get_header(); ?>

<div class="container">

  <section class="page_single">

    <!-- Хлебные крошки -->
    <div class="row">

      <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>

    </div>
    <!-- /Хлебные крошки -->

    <!-- Тело поста -->
    <div class="row">

        <!-- Список категорий -->
        <div class="col-md-3">
            <?php include(TEMPLATEPATH . '/template-parts/blog/categories-list.php'); ?>
        </div>
        <!-- /Список категорий -->

        <!-- Пост -->
        <div class="col-md-9">
            <?php include(TEMPLATEPATH . '/template-parts/blog/content-single-post.php'); ?>
        </div>
        <!-- /Пост -->

    </div>
    <!-- /Тело поста -->

    <!-- Комментарии -->
    <div class="row">
      <div class="col-md-9 col-md-offset-3">

        <section class="single-news-comments">
          <?php comments_template(); ?>
        </section>

      </div>
    </div>
    <!-- /Комментарии -->

  </section>

</div>

<?php get_footer(); ?>


