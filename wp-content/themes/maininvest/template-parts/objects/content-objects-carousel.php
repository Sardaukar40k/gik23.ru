<div class="row">

  <section class="objects_list sections-style">

    <h2 class="sections-h2 text-center"><?php echo ($title); ?></h2>

    <div class="clearfix"></div>

      <?php
        $object = array(
          'post_type' => 'objects',
          'posts_per_page' => '-1'
        );
        $query = new WP_Query($object);
        while ($query->have_posts()) : $query->the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="objects_list-item">

          <div class="objects_list-item-beneffit">

            <img src=" <?php echo get_field('object-icon'); ?>" alt="<?php echo get_field('object-benefit'); ?>" class="objects_list-item-beneffit-icon">

            <p class="objects_list-item-beneffit-text" style="background-color: <?php echo get_field('object-benefit-color'); ?>">
              <?php echo get_field('object-benefit'); ?>
            </p>

          </div>

          <img src="<?php echo get_field('object-preview'); ?>" alt="<?php echo get_field('object-title'); ?>">

          <h3><?php echo get_field('object-title'); ?></h3>

        </a>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    <div class="clearfix"></div>

      <a href="obekty/" class="objects_list-more-link">Все объекты</a>

  </section>

</div>