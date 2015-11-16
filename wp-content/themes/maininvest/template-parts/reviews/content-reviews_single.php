<section class="reviews-item reviews_full-item">

  <img src="<?php echo get_field('photo'); ?>" alt="Отзывы о Главной Инвестиционной компании" class="img-circle">

  <article class="reviews-item-content reviews_full-item-content" itemscope itemtype="http://schema.org/Review">

    <h2><?php echo get_field('name'); ?>, <span><?php echo get_field('age'); ?> <?php num2word(get_field('age')); ?></span></h2>

    <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>

    <div itemprop="reviewBody">
      <p><?php the_content(); ?></p>
    </div>

    <?php if ( get_field('review_original') ) : ?>
      <a href="<?php echo get_field('review_original'); ?>" class="review-original">Оригинал</a>
    <?php endif; ?>

  </article>
</section>