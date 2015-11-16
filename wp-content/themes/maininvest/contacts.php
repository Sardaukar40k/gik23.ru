<?php /*Template Name: Контакты*/ ?>
<?php get_header(); ?>

<div class="container contacts-main">
   <div class="row">
        <div class="col-md-12 page-logo">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <!-- Хлебные крошки -->
    <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->
    <div class="row">
        <section class="contacts-header col-md-12 text-center">
            <?php the_title( '<h1>', '</h1>'); ?>
        </section>
    </div>
    <div class="row contacts-info">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row contacts-map">
        <a class="dg-widget-link" href="http://2gis.ru/krasnodar/firm/3237490513560544/center/39.00732278823853,45.09462537157035/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Краснодара</a><div class="dg-widget-link"><a href="http://2gis.ru/krasnodar/center/39.007321,45.093951/zoom/16/routeTab/rsType/bus/to/39.007321,45.093951╎Главная Инвестиционная Компания, ООО, строительная компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Главная Инвестиционная Компания, ООО, строительная компания</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":400,"borderColor":"#a3a3a3","pos":{"lat":45.09462537157035,"lon":39.00732278823853,"zoom":16},"opt":{"city":"krasnodar"},"org":[{"id":"3237490513560544"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
    </div>
</div>
<!-- <div class="container">
    <div class="row">
        <div class="contacts-callback col-md-10 col-md-offset-1">
            <?php /*echo get_field('custom-form'); */?>
        </div>
    </div>
</div> -->

<?php get_footer(); ?>