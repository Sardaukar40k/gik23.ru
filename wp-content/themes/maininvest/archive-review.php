<?php get_header(); ?>
<div class="container about">
    <div class="row">
        <div class="col-md-12 page-logo">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <!-- Хлебные крошки -->
    <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->
    <div class="row">
        <section class="comments-content container">
            <h1>Отзывы клиентов ООО "ГИК"</h1>
            <div class="row">
              <?php $review = array(
                   'post_type' => 'review',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
    'posts_per_page' => '6',
               );
                query_posts($review); ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="single-comment col-md-6">
                    <img src="<?php echo get_field('photo'); ?>" alt="Отзывы о Главной Инвестиционной компании" width="135" height="auto" class="img-circle">
                    <article class="comment-text">
                        <h2><?php echo get_post_meta($post->ID, 'name', true); ?>, <span><?php echo get_post_meta($post->ID, 'age', true); ?> лет <?php get_post_meta($post->ID, 'post', true); ?></span></h2>
                        <p class="comment-object"><?php echo get_post_meta($post->ID, 'object', true); ?></p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_the_permalink(); ?>" class="comments-more">Отзыв полностью</a>
                    </article>
                </div>
                <?php endwhile; ?> 
                <?php endif; ?>
            </div>
        </section>
    </div>
    <div class="row">
                <div class="col-md-12">
                  <?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>  
                </div>
            </div>
</div>
<?php get_footer(); ?>