<div class="reviews-item">

  <img src="<?php echo get_field('photo'); ?>" alt="Отзывы о Главной Инвестиционной компании" width="135" height="auto" class="img-circle">

  <article class="reviews-item-content">

    <h2><?php echo get_field('name'); ?>, <span><?php echo get_field('age'); ?> <?php num2word(get_field('age')); ?></span></h2>
    <p class="reviews-item-content-object"><?php echo get_field('object'); ?></p>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php echo get_the_permalink(); ?>">Отзыв полностью</a>

  </article>

</div>