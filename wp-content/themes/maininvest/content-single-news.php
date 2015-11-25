<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="single-post" itemscope itemtype="http://schema.org/Article">

  <div itemprop="articleBody">

    <!-- Заголовок -->
    <h1 itemprop="name"><?php the_title(); ?></h1>
    <!-- /Заголовок -->

    <div class="pluso pluso-news" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=06" data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>

    <!-- start: мета-ифнормация о записи -->
    <p class="post-info"><time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?>,  <?php the_time(); ?></time><span class="post-comments"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comments-icon.png"><?php comments_number('0', '1', '%'); ?></span><span class="post-views"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/view.png" alt="Количество просмотров записи"> <?php echo the_views();; ?></span></p>
    <!-- start: мета-ифнормация о записи -->

        <!-- start: Изображение записи -->
        <?php if (get_field('post_img')) : ?>
            <div class="single-news-img"><img src="<?php the_field('post_img'); ?>" alt="<?php the_title(); ?>" itemprop="image" title="<?php the_title(); ?>" class="img-responsive"></div>
            <?php else : ?> <!-- картинка по-умолчанию -->
                <div class="single-news-img"><img itemprop="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/post-img-default.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"></div>
        <?php endif; ?>
        <!-- end: Изображение записи -->

        <!-- start: Текст записи -->
        <div class="post-text" itemprop="text">
            <?php the_content(); ?>
        </div>
        <!-- start: Текст записи -->

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</article>

