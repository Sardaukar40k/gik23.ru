<div class="row">
  <section class="main-partners sections-style">

    <h2 class="sections-h2 text-center"><?php echo ($block_title); ?></h2>

    <div id="partners-carusel" class="owl-carousel">

      <?php
        $query_partners = new WP_Query($partners);
        while ($query_partners->have_posts()) : $query_partners->the_post(); ?>

          <img class="lazyOwl" data-src="<?php echo get_field('partner_logo'); ?>" src="<?php echo get_field('partner_logo'); ?>" alt="<?php echo get_field('partner_title'); ?>" title="<?php echo get_field('partner_title'); ?>">

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </div>

  </section>
</div>