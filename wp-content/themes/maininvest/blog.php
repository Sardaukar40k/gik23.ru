<?php /*Template Name: Блог*/ ?>
<?php get_header(); ?>
    <div class="container posts">
        <div class="row">
            <div class="col-md-12 page-logo">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <!-- Хлебные крошки -->
        <?php get_template_part('content', 'breadcrumbs'); ?>
        <!-- /Хлебные крошки -->
        <div class="row">
            <section class="blog-header col-md-12 text-center sections-style">
                <h1><?php the_title(); ?></h1>
            </section>
        </div>
        <div class="row">
            <!-- Список категорий -->
            <div class="col-md-2">
                <?php get_template_part('content', 'categories'); ?>
            </div>
            <!-- /Список категорий -->

            <!-- Цикл записей -->
            <div class="col-md-10">
                <?php get_template_part('loop'); ?>
            </div>
            <!-- /Цикл записей -->
        </div>
        <?php get_template_part('content', 'pagination'); ?>
    </div>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>