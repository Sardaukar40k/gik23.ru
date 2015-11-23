<?php

  $posts = array(
    'paged' => get_query_var('paged'),
    'post_type'       => 'post',
    'posts_per_page' => '5'
  );

  query_posts($posts);

  while(have_posts()) : the_post();
    ?>

    <!-- news item -->
    <article itemscope itemtype="http://schema.org/Article" class="row single-post">
      <div itemprop="articleBody">
      <div class="col-md-4 news-img">
        <?php if ( get_field('post_img') ) : ?>

          <a href="<?php the_permalink(); ?>"><img itemprop="image" src="<?php the_field('post_img'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"></a>

        <?php endif; ?>
      </div>

      <div class="col-md-8 post">
        <h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-info"><time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?>,  <?php the_time(); ?></time><span class="post-comments"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comments-icon.png"><?php comments_number('0', '1', '%'); ?></span>
          <span class="post-views"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/view.png" alt="Количество просмотров записи"> <?php the_views(); ?></span></p>

        <div itemprop="text">
          <?php the_excerpt(); ?>
        </div>

        <p class="postmetadata">Категория: <span itemprop="articleSection"><?php the_category(', ') ?></span></p>
      </div>
      <div class="post-more col-md-8 col-md-offset-4">
        <a itemprop="url" href="<?php the_permalink(); ?>">Читать полностью</a>
      </div>
    </div>
  </article>
    <!-- news item -->

  <?php wp_reset_postdata(); ?>

<?php endwhile; ?>