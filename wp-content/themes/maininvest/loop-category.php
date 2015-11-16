<?php
$blog = array(
    'category' => 'cat_ID',
    'post_status' => 'publish',
    'numberposts' => '5'
);
get_posts($blog); ?>
<?php if(have_posts()) : while(have_posts()) : the_post();?>
    <div class="row single-post">
        <div class="col-md-4 news-img">
            <?php if ( get_post_meta($post->ID, 'post_img', true ) ) : ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('post_img'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"></a>
            <?php endif; ?>
        </div>
        <article class="col-md-8 post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-info"><span class="date-time"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?>,  <?php the_time(); ?></span><span class="post-comments"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comments-icon.png"><?php comments_number('0', '1', '%'); ?></span><span class="post-views"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/view.png" alt="Количество просмотров новости"> <?php echo the_views();; ?></span></p>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
        <div class="post-more col-md-8 col-md-offset-4"><a href="<?php the_permalink(); ?>">Читать полностью</a>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>