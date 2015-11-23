<!-- TODO: переписать вёрстку слайдера -->

  <div id="bannerCarousel" class="carousel slide"  data-ride="carousel">
    <div class="carousel-inner">
      <?php $banners = array(
          'post_type' => 'headers',
          'publish' => true,
          'paged' => get_query_var('paged'),
          'post_per_page' => '-1'
      );
      $query = new WP_Query($banners);
      while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="item <?php if ($post->ID == 1865 ) echo 'hot-eigth'; ?> <?php if ($post->ID == 2094) echo 'hot-eigth'; ?> <?php if ($post->ID == 2568) echo 'hot-eigth'; ?> <?php if ($post->ID == 1653) echo 'active'; ?>  " style="background: url('<?php echo get_field('main-banner-img'); ?>') center center no-repeat; background-size: cover;">
          <div class="container m-caption-wrap">
            <div class="carousel-caption">
              <?php if($post->ID == 1653) : ?>
                <h1><?php echo get_field('main-banner-head'); ?></h1><br>

              <?php else : ?>
                <h2><?php echo get_field('main-banner-head'); ?></h2><br>

              <?php endif; ?>

              <p><?php echo get_field('main-banner-description'); ?></p><br>
              <?php if (get_field('main-banner-link')) : ?>
                <a class="btn btn-lg btn-primary" href="<?php echo get_field('main-banner-link'); ?>" role="button">Узнать больше</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <a class="left carousel-control" href="#bannerCarousel" role="button" data-slide="prev">
      <i class="fa fa-chevron-left fa-2x"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#bannerCarousel" role="button" data-slide="next">
      <i class="fa fa-chevron-right fa-2x"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>