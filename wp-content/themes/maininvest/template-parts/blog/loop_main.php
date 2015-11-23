<?php

$posts = array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'post',
    'posts_per_page' => '5'
);

query_posts($posts);

if(have_posts()) : while(have_posts()) : the_post();
  ?>

  <?php include(TEMPLATEPATH . '/template-parts/blog/item.php') ?>

<?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>