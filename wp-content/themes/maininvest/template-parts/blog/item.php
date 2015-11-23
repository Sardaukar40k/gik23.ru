
<!-- news item -->
<article itemscope itemtype="http://schema.org/Article" class="post">
  <div class="clearfix"></div>
  <div itemprop="articleBody">

    <!-- Изображение -->
    <div class="post-img">

      <?php if ( get_field('post_img') ) : ?>

        <a href="<?php the_permalink(); ?>">
          <img itemprop="image" src="<?php the_field('post_img'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        </a>

      <?php endif; ?>

    </div>
    <!-- /Изображение -->

    <!-- Тело записи -->
    <div class="post-body">

      <h2 itemprop="name">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>

      <p class="post-body-info">

        <!-- Дата публикации -->
        <time class="post-body-info-item" itemprop="datePublished" datetime="<?php the_time('c'); ?>">
          <i class="fa fa-clock-o"></i>
          <?php the_time('j F Y'); ?>,
          <?php the_time(); ?>
        </time>
        <!-- /Дата публикации -->

        <!-- Кол-во. комментариев -->
        <span class="post-body-info-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comments-icon.png">
          <?php comments_number('0', '1', '%'); ?>
        </span>
        <!-- /Кол-во. комментариев -->

        <!-- Кол-во. просмотров -->
        <span class="post-body-info-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/view.png" alt="Количество просмотров записи">
          <?php the_views(); ?>
        </span>
        <!-- /Кол-во. просмотров -->
      </p> <!-- /.post-body-info -->

      <div itemprop="text">
        <?php the_excerpt(); ?>
      </div>

      <p class="post-body-category">Категория: <span itemprop="articleSection"><?php the_category(', ') ?></span></p>

    </div> <!-- /.post-body -->
    <!-- /Тело записи -->

    <div class="clearfix"></div>

    <!-- Ссылка -->
    <div class="post-more">
      <a itemprop="url" href="<?php the_permalink(); ?>">Читать полностью</a>
    </div>
    <!-- /Ссылка -->

  </div>
  <div class="clearfix"></div>
</article>
<!-- news item -->
