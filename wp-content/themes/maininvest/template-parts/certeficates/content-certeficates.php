<div id="certificates-carusel" class="owl-carousel">

  <?php $certificates = array(
    'post_type' => 'certificate',
    'publish' => true,
    'posts_per_page' => '-1'
  );

  $query = new WP_Query($certificates);
  while ($query->have_posts()) : $query->the_post(); ?>

    <a rel="nofollow" href="<?php echo get_field('main-certificate'); ?>">
      <img class="lazyOwl" data-src="<?php echo get_field('main-certificate-thumbnail'); ?>" src="<?php echo get_field('main-certificate-thumbnail'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="126">
    </a>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>