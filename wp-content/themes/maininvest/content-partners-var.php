<section class="row main-partners sections-style">
  <h2 class="sections-h2 text-center">Наши партнёры</h2>
  <div id="partners-carusel" class="owl-carousel">
    <?php
    $query = new WP_Query($partners);
    while ($query->have_posts()) : $query->the_post();
      ?>
      <div>
        <img src="<?php echo get_field('partner_logo'); ?>" alt="<?php echo get_field('partner_title'); ?>" title="<?php echo get_field('partner_title'); ?>">
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>