<?php

  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

  $args = array (
    'post_type' => 'vacancies',
    'nopaging' => false,
    'posts_per_page' => '5',
    'posts_per_archive_page' => '5',
    'paged' => $paged
  );

  query_posts($args);
  if (have_posts()) : while (have_posts()) : the_post();

?>

    <section class="vacancies__post">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="vacancies__post__content">
        <div class="vacancies__post__content__text">
          <?php the_excerpt(); ?>
        </div>
        <div class="vacancies__post__content__price">
          <?php echo get_field('vacancies_salary'); ?>
        </div>
      </div>
    </section>

<?php endwhile; ?>
    <?php else : ?>
    <section class="page--empty__head sections-style">
      <h2 class="sections-h2">В данный момент вакансий нет</h2>
    </section>


<?php endif; ?>

<?php wp_reset_postdata(); ?>

