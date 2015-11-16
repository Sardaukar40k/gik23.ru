<?php /*Template Name: Команда*/ ?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 page-logo">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 breadcrumbs-block">
          <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>
    </div>
</div>
<div class="container staff">
        <section class="row main-leadership sections-style">
            <h2 class="sections-h2 text-center">Наше руководство</h2>
            <div id="leadership-carusel" class="owl-carousel">
                <?php $leadership = array(
                    'post_type' => 'leadership',
                    'publish' => true,
                    'paged' => get_query_var('paged'),
                    'posts_per_page' => '-1'
                );
                $query = new WP_Query($leadership);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div>
                        <img src="<?php echo get_field('photo'); ?>" alt="<?php echo (get_post_meta($post->ID, 'lastname', true)); ?> <?php echo (get_post_meta($post->ID, 'name', true)); ?>"  title="<?php echo (get_post_meta($post->ID, 'lastname', true)); ?> <?php echo (get_post_meta($post->ID, 'name', true)); ?>" class="img-circle">
                        <p class="person-name"><span class="person-last-name"><?php echo (get_post_meta($post->ID, 'lastname', true)); ?></span>
                            <br><?php echo (get_post_meta($post->ID, 'name', true)); ?></p>
                        <p class="person-description"><?php echo (get_post_meta($post->ID, 'post', true)); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
</div>
<div class="container command">
    <div class="row">
        <section class="col-md-12 command-content">
            <h1>Наши менеджеры</h1>
            <div class="row command-managers">
            <?php 
            $managers = array(
                   'post_type' => 'managers',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
                'posts_per_page' => '-1',
               );
                query_posts($managers); ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         <div class="col-md-4 col-sm-6 command-single-manager">
                             <img src="<?php echo get_field('photo'); ?>" alt="<?php echo (get_post_meta($post->ID, 'lastname', true)); ?><?php echo (get_post_meta($post->ID, 'name', true)); ?>" width="160" height="auto"class=" img-circle">
                             <p class="person-name"><span class="person-last-name"><?php echo (get_post_meta($post->ID, 'lastname', true)); ?></span>
                                 <br><?php echo (get_post_meta($post->ID, 'name', true)); ?></p>
                             <p class="person-description manager-post" style="width: 100%;"><?php echo (get_post_meta($post->ID, 'post', true)); ?></p>
                             <a href="tel:<?php echo get_post_meta($post->ID, 'phone', true); ?>" class="manager-phone"> <?php echo get_post_meta($post->ID, 'phone', true); ?></a>
                         </div>
                     
               <?php endwhile; ?>
               <?php endif; ?>
               </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>