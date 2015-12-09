
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="single-post" itemscope itemtype="http://schema.org/Article">

  <div itemprop="articleBody">


      <!-- start: Заголовок -->
      <h1 itemprop="name"><?php the_title(); ?></h1>
      <!-- end: Заголовок -->



      <!-- start: мета-ифнормация о записи -->
    <p class="single-post-info">

      <!-- Дата публикации -->
      <time class="single-post-info-item" itemprop="datePublished" datetime="<?php the_time('c'); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/news/time_icon.png" alt="Время публикации записи">
        <?php the_time('j F Y'); ?>,
        <?php the_time(); ?>
      </time>
      <!-- /Дата публикации -->

      <!-- Кол-во. комментариев -->
        <span class="single-post-info-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comments-icon.png">
          <?php comments_number('0', '1', '%'); ?>
        </span>
      <!-- /Кол-во. комментариев -->

      <!-- Кол-во. просмотров -->
        <span class="single-post-info-item">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/view.png" alt="Количество просмотров записи">
          <?php the_views(); ?>
        </span>
      <!-- /Кол-во. просмотров -->
    </p> <!-- /.post-body-info -->

      <!-- мета-ифнормация о записи -->
    <div class="pluso pluso-news" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=06" data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>

      <!-- Изображение -->
      <?php if (get_field('post_img')) : ?>

        <div class="single-post-img">
          <img src="<?php the_field('post_img'); ?>" alt="<?php the_title(); ?>" itemprop="image" title="<?php the_title(); ?>">
        </div>

      <?php else : ?> <!-- картинка по-умолчанию -->

        <div class="single-post-img">
          <img itemprop="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/post-img-default.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        </div>

      <?php endif; ?>
      <!-- /Изображение -->

      <!-- start: Текст записи -->
      <div class="single-post-content" itemprop="text">
        <?php the_content(); ?>
      </div>
      <!-- start: Текст записи -->

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</article>
