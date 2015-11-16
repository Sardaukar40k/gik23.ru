<?php get_header(); ?>
<div class="container page">
    <div class="row">
        <div class="col-md-12 page-logo">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <!-- Хлебные крошки -->
    <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->
    <div class="row">
        <section class="col-md-12 page-content">
            <?php the_title('<h1>', '</h1>'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div><?php the_content() ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
    </div>
    <?php if(get_field('about-documentation')) : ?>
    <section class="row main-complexes sections-style">
        <h2 class="sections-h2 text-center">Документация</h2>
        <div id="about-docs-carusel" class="owl-carousel about-docs">
            <?php echo get_field('about-documentation'); ?>
        </div>
    </section>
    <?php endif; ?>
</div>
<?php get_footer(); ?>