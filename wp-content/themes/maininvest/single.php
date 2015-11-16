<?php get_header(); ?>
<div class="container single-news-page">
    <!-- Хлебные крошки -->
    <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->
    <div class="row">
        <!-- Список категорий -->
        <div class="col-md-3">
            <?php get_template_part('content', 'categories'); ?>
        </div>
        <!-- /Список категорий -->
        <!-- Запись -->
        <div class="col-md-9">
            <?php get_template_part('content', 'single-news'); ?>
        </div>
        <!-- /Запись -->
    </div>
    <div class="row">
        <!-- Комментарии -->
        <div class="col-md-9 col-md-offset-3 single-news-comments">
            <?php comments_template(); ?>
        </div>
        <!-- /Комментарии -->
    </div>
</div>
<?php get_footer(); ?>