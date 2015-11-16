<?php get_header(); ?>
    <div class="container posts">
        <div class="row">
            <div class="col-md-12 page-logo">
                <?php echo category_description(); ?>
            </div>
        </div>
        <!-- Хлебные крошки -->
        <?php get_template_part('content', 'breadcrumbs'); ?>
        <!-- /Хлебные крошки -->
        <div class="row">
            <section class="blog-header col-md-12 text-center sections-style">
                <h1><?php single_cat_title(); ?></h1>
            </section>
        </div>
        <div class="row">
            <div class="col-md-2">
                <?php get_template_part('content', 'categories'); ?>
            </div>
            <!-- Цикл -->
            <div class="col-md-10">
               <?php get_template_part('content', 'category'); ?>
            </div>
            <!-- /Цикл -->
        </div>
        <!-- Номера страниц -->
        <?php get_template_part('content', 'pagination'); ?>
        <!-- /Номера страниц -->
    </div>
<?php get_footer(); ?>