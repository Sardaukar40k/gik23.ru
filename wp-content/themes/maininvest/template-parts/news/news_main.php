    <?php $blog = array(
        'publish' => true,
        'posts_per_page' => '4',
      );

    $query = new WP_Query($blog);
    while ($query->have_posts()) : $query->the_post(); ?>

      <div class="col-sm-3" style="position: relative">
        <article class="latest-news">

          <a href="<?php the_permalink(); ?>">
            <?php
              $media = get_attached_media( 'image', $POST->ID );
              $media = array_shift( $media );

              $image_id = $media->ID; // ID картинки


              $post_image_medium = image_downsize($image_id, 'medium'); // Получаем миниатюру страницы

              echo '<img src="'. $post_image_medium[0] .'" />'; // выводем картинку в браузере
            ?>
          </a>

        <div class="latest-news-content">

          <div class="post-info">
            <time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><?php the_time('j F Y'); ?>,  <?php the_time(); ?></time>
          </div>

          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

          <p><?php echo wp_trim_words( get_the_content(), 15, '' ); ?> ...</p>

          <a href="<?php the_permalink(); ?>">подробнее</a>

        </div>

      </article>
    </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

