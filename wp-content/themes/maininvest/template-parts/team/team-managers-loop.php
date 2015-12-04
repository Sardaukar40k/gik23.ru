<?php

  $args = array(
    'post_type' => 'staff',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  );

  $leadership = new WP_Query($args);

  while ($leadership->have_posts()) : $leadership->the_post();

    $position = get_field('staff-check');

    if($position == 'менеджер по продажам') :

      include(TEMPLATEPATH . '/template-parts/team/staff-item.php');

    endif;

  endwhile;

  wp_reset_postdata();

?>