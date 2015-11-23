
<?php get_header(); ?>

<div class="container">
    <div class="row">

        <section class="posts">

            <!-- Миниатюра -->
            <div class="page-logo">
                <?php echo category_description(); ?>
            </div>
            <!-- /Миниатюра -->

            <!-- Хлебные крошки -->
            <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
            <!-- /Хлебные крошки -->

            <!-- Заголовок страницы -->
            <div class="blog-header sections-style">
                <h1><?php single_cat_title(); ?></h1>
            </div>
            <!-- /Заголовок страницы -->

            <!-- Список категорий -->
            <div class="col-md-2">
                <?php include(TEMPLATEPATH . '/template-parts/blog/categories-list.php'); ?>
            </div>
            <!-- /Список категорий -->

            <!-- Цикл записей -->
            <div class="col-md-10">
                <?php include(TEMPLATEPATH . '/template-parts/blog/loop_archive.php') ?>
            </div>
            <!-- /Цикл записей -->

            <!-- Пагинация -->
            <?php include(TEMPLATEPATH . '/template-parts/pagination/content-pagination.php'); ?>
            <!-- /Пагинация -->

        </section>

    </div>
</div>

<?php get_footer(); ?>
