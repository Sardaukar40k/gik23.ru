<div class="row">
  <?php
    $rewiev = array(
                'post_type' => 'review',
                'publish' => true,
                'paged' => get_query_var('paged'),
                'posts_per_page' => '4'
              );
    $query = new WP_Query($rewiev);
    while ($query->have_posts()) : $query->the_post();
  ?>
      <div class="single-comment col-md-6">
        <img src="<?php echo get_field('photo'); ?>" alt="Отзывы о Главной Инвестиционной Компании" title="Отзывы о Главной Инвестиционной Компании" width="135" class="img-circle">
        <article class="comment-text">
          <h2><?php echo get_post_meta($post->ID, 'name', true); ?><span><?php echo get_post_meta($post->ID, 'age', true); ?> <?php num2word(get_field('age', $post->ID)); ?></span></h2>
          <p class="comment-object"><?php echo get_post_meta($post->ID, 'object', true) ?></p>
          <?php the_excerpt(); ?>
          <a href="<?php echo get_the_permalink(); ?>" class="comments-more">Отзыв полностью</a>
        </article>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>
<div class="row all-comments">
  <p class="text-left"><a href="otzyvy/">Все отзывы</a></p>
</div>