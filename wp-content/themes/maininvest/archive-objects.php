<?php /*Template Name: Объекты*/ ?>
<?php get_header(); ?>
<div class="container about">
           <div class="row">
               <div class="col-md-12 page-logo">
                   <?php the_post_thumbnail(); ?>
               </div>
           </div>

          <!-- Хлебные крошки -->
           <div class="row">
              <?php include(TEMPLATEPATH . '/template-parts/breadcrumbs/content-breadcrumbs.php'); ?>
            </div>
           <!-- /Хлебные крошки -->

           <div class="row">
               <section class="col-md-12 about-company objects-page">
                   <h1>Объекты ООО "ГИК"</h1>
                   <div class="row">
                       <?php 
                $object = array(
                   'post_type' => 'objects',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
               );
                query_posts($object); ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class=" col-md-4 col-sm-6 objects-item">
                <img src="<?php echo get_field('preview'); ?>" alt="<?php echo get_post_meta($post->ID,'title', true); ?>" width="149" height="auto" class="img-responsive img-circle">
                <h2><?php echo get_field('title'); ?></h2>
                <div class="object-meta">
                <p><strong>адрес:</strong> <?php echo get_post_meta($post->ID, 'object_adress', true); ?></p>
                <p><strong>срок сдачи: </strong> <?php echo get_post_meta($post->ID, 'deadline', true); ?></p>
                <p><strong>цена:</strong> <?php echo get_post_meta($post->ID,'price', true); ?></p>
                </div>
                <div class="objects-back-link col-md-12"><a href="<?php the_permalink(); ?>"> посмотреть <span>→</span></a>
       </div>
            </div>
            
             <?php endwhile; ?>
            <?php endif; ?>
                   </div>
               </section>
           </div>
       </div>
<?php get_footer(); ?>