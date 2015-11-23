<?php
  $args = array(
    'category' => 'cat_ID',
    'post_status' => 'publish',
    'numberposts' => '5'
  );

  get_posts($args);

  if(have_posts()) : while(have_posts()) : the_post();

  ?>

  <?php include(TEMPLATEPATH . '/template-parts/blog/item.php') ?>

  <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

  <?php endif; ?>
