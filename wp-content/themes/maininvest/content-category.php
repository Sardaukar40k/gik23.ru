<?php
$blog = array(
    'category' => 'cat_ID',
    'post_status' => 'publish',
    'numberposts' => '5'
);
get_posts($blog); ?>
<?php if(have_posts()) : while(have_posts()) : the_post();?>
    <article itemscope itemtype="http://schema.org/Article" class="row single-post">
        <div itemprop="articleBody">
            <div class="col-md-4 news-img">
                <?php if ( get_field('post_img') ) : ?>
                    <a href="<?php the_permalink(); ?>"><img itemprop="image" src="<?php the_field('post_img'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"></a>
                <?php endif; ?>
            </div>
            <div class="col-md-8 post">
                <h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <!-- start: мета-ифнормация о записи -->
              <p class="post-info"><time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?>,  <?php the_time(); ?></time><span class="post-comments"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comments-icon.png"><?php comments_number('0', '1', '%'); ?></span><span class="post-views"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/view.png" alt="Количество просмотров записи"> <?php echo the_views();; ?></span></p>
              <!-- start: мета-ифнормация о записи -->
                <div itemprop="text">
                    <?php the_excerpt(); ?>
                </div>
                <p class="postmetadata">Категория: <span itemprop="articleSection"><?php the_category(', ') ?></span></p>
            </div>
            <div class="post-more col-md-8 col-md-offset-4"><a itemprop="url" href="<?php the_permalink(); ?>">Читать полностью</a>
            </div>
        </div>
    </article>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>