

<section class="banners-carousel owl-carousel" id="banners_main">

  <!-- Banners item -->
  <?php

  $args = array(
      'post_type' => 'headers',
      'post_per_page' => '-1'
  );

  $banners = new WP_Query($args);

  while($banners -> have_posts()) : $banners -> the_post();

  ?>

    <div class="banners-carousel-item lazyOwl" data-src="<?php the_permalink(); ?>" style="background: url('<?php echo get_field('main-banner-img'); ?>') center center no-repeat;">

      <div class="container">
        <div class="row">

          <h1 class="banners-carousel-item-head">
            <?php echo get_field('main-banner-head'); // заголовок баннера ?>
          </h1>
          <br>
          <h2 class="banners-carousel-item-subtitle">
            <?php echo get_field('main-banner-description'); // подзаголовок баннера ?>
          </h2>
          <br>
          <a href="<?php echo get_field('main-banner-link'); // ссылка на акцию ?>" class="banners-carousel-item-link">Узнать больше</a>

        </div>
      </div>

    </div>



  <?php endwhile; ?>
  <!-- /Banners item -->

</section>

