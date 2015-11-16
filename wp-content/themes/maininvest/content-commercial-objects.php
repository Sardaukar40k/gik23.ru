<?php $args  = array(
        'post_type' => 'commercial_objects',
        'publish' => true,
        'paged' => get_query_var('paged'),
        'post_per_page' => '5'
    );
    $query = new WP_Query($args );
    while ($query->have_posts()) : $query->the_post(); ?>
  <section class="row commercial__item">
    <div class="col-md-3 commercial__item__thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php echo types_render_field('commercail_object_photo', array('index' => 0, 'url' => true ) ); ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></a></div>
    <div class="col-md-9 commercial__item__content">
      <h2><?php the_title(); ?></h2>
      <p class="commercial__item__content__date"><time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><?php the_time('j F Y'); ?>,  <?php the_time(); ?></time></p>
      <div class="commercial__item__content__price">
        <?php echo get_field('commercial_price'); ?> руб.
      </div>
      <div class="commercial__item__content__text">
        <?php the_excerpt(); ?>
      </div>
      <a href="<?php the_permalink(); ?>" class="commercial__item__content__link">Подробнее</a>
    </div>
  </section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>