<?php get_header(); ?>

<?php
  $args = array(
    'post_type' => 'objects',
    'publish' => true
  );
$singleObject = new WP_Query($args); ?>

  <div class="container about">
    <div class="carousel-wrapper">

      <!-- carousel -->
      <div class="row object-item-carousel">
        <!-- thumb navigation carousel -->
          <!-- main slider carousel -->
            <div class="col-md-12" id="slider">
              <div class="col-md-12" id="carousel-bounding-box">
                <div id="ojectsCarousel" class="carousel slide">
                  <!-- main slider carousel items -->
                  <div class="carousel-inner">
                    <div class="active item" data-slide-number="0">
                      <img src="<?php echo get_field('render-1') ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            </div>
                    <?php if (get_field('render-2')) : ?>
                      <div class="item" data-slide-number="1">
                        <img src="<?php echo get_field('render-2') ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                      </div>
                    <?php endif; ?>
                    <?php if (get_field('render-3')) : ?>
                      <div class="item" data-slide-number="2">
                        <img src="<?php echo get_field('render-3') ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                      </div>
                    <?php endif; ?>
                  </div>
                  <!-- main slider carousel nav controls -->
                </div>
              </div>
          </div>

          <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">
            <!-- thumb navigation carousel items -->
            <ul class="list-inline">
              <li>
                <a id="carousel-selector-0" class="selected">
                  <img src="<?php echo get_field('render-1') ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                </a>
              </li>
              <?php if (get_field('render-2')) : ?>
              <li>
                <a id="carousel-selector-1"  >
                 <img src="<?php echo get_field('render-2') ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                </a>
              </li>
              <?php endif; ?>
              <?php if (get_field('render-3')) : ?>
              <li>
                <a id="carousel-selector-2"  >
                  <img src="<?php echo get_field('render-3') ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
            <!--/main slider carousel-->
      </div>
            <!-- carousel -->
            <div class="row">
                <div class="col-md-5 single-object-meta">
                    <h1><?php echo get_field('title'); ?></h1>
                    <div class="meta-diveder"></div>
                    <p><span>адрес: </span><?php echo get_field('object_adress'); ?></p>
                    <p><span>срок сдачи: </span> <?php echo get_field('deadline'); ?></p>
                    <!-- <p><span>стоимость: </span> <?php echo get_field('price'); ?></p> -->
                </div>
            </div>
            </div>
            <div class="row object-item-about">
                <div class="col-md-12">
                    <p><?php echo get_field('description'); ?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid object-reason-bg">
            <div class="container">
                <div class="row object-item-reason">
                    <section class="col-md-12 sections-style">
                        <h2 class="sections-h2">Почему стоит выбрать именно <?php echo get_field('title', $post->ID); ?></h2>
                        <div class="row">
                            <div class="col-md-3 reason">
                                <img src="<?php echo get_field('reason-img-1'); ?>" alt="Причины купить квартиру в ЖК Видный" width="93" heigth="auto" class="img-circle">
                                <h3><?php echo get_field('reason-head-1'); ?></h3>
                                <p><?php echo get_field('reason-text-1'); ?></p>
                            </div>
                            <div class="col-md-3 reason">
                                <img src="<?php echo get_field('reason-img-2'); ?>" alt="Причины купить квартиру в ЖК Видный" width="93" heigth="auto" class="img-circle">
                                <h3><?php echo get_field('reason-head-2'); ?></h3>
                                <p><?php echo get_field('reason-text-2'); ?></p>
                            </div>
                            <div class="col-md-3 reason">
                                <img src="<?php echo get_field('reason-img-3'); ?>" alt="Причины купить квартиру в ЖК Видный" width="93" heigth="auto" class="img-circle">
                                <h3><?php echo get_field('reason-head-3'); ?></h3>
                                <p><?php echo get_field('reason-text-3'); ?></p>
                            </div>
                            <div class="col-md-3 reason">
                                <img src="<?php echo get_field('reason-img-4'); ?>" alt="Причины купить квартиру в ЖК Видный" width="93" heigth="auto" class="img-circle">
                                <h3><?php echo get_field('reason-head-4'); ?></h3>
                                <p><?php echo get_field('reason-text-4'); ?></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row location">
                <section class="col-md-12 sections-style">
                    <h2 class="sections-h2">Расположение <?php echo get_field('title', $post->ID); ?></h2>
                    <div class="row object-item-location">
                        <div class="col-md-6 about">
                            <p><?php echo get_field('location', $post->ID); ?></p>
                        </div>
                        <div class="col-md-6 map">
                                        <?php
$location = get_field('map_location');
if( ! empty($location) ):
?>
    <div id="map" style="width: 100%; height: 350px;"></div>
    <script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>
    
    <script type="text/javascript">
  //<![CDATA[
	function load() {
	var lat = <?php echo $location['lat']; ?>;
	var lng = <?php echo $location['lng']; ?>;
// coordinates to latLng
	var latlng = new google.maps.LatLng(lat, lng);
// map Options
	var myOptions = {
	zoom: 15,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
   };
//draw a map
	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	var marker = new google.maps.Marker({
	position: map.getCenter(),
	map: map
   });
}
// call the function
   load();
//]]>
</script>
    <?php endif; ?> 
                        </div>
                    </div>
                </section>
            </div>
            <div class="row plane">
                <section class="col-md-12 sections-style">
                    <h2 class="sections-h2">Планировки <?php echo get_field('title', $post->ID) ?></h2>
                    <div class="row object-planes">
                        <div id="plane-carusel" class="owl-carousel">
                            <?php for($i=0; $i<=6; $i++) { ?>
                           <?php if (get_field('plane-img-'.$i)) : ?>
                            <div class="plane-carusel-item">
                                <a href="<?php the_field('plane-img-'.$i); ?>"><img src="<?php the_field('plane-img-'.$i); ?>" alt="Планировка <?php the_title(); ?>" title="Планировка <?php the_title(); ?>" class="img-responsive"></a>
                                <p><?php echo get_field('plane-description-'.$i); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div>
                    </div>
                </section>
            </div>
        </div>
        <div class="container-fluid object-infrastructure-bg">
            <div class="container">
                <div class="row infrastructure">
                    <section class="col-md-12 sections-style structure-section">
                        <h2 class="sections-h2">Инфраструктура <?php the_title(); ?></h2>
                        <div class="row">
                           <?php for($j=1; $j<=6; $j++) { ?>
                            <div class="col-md-4 single-structure">
                                <img src="<?php echo get_field('structure-img-'.$j); ?>" alt="Развитая инфраструктура <?php the_title(); ?>">
                                <h3><?php echo get_field('structure-head-'.$j); ?></h3>
                                <p><?php echo get_field('structure-description-'.$j); ?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row technology">
                <section class="col-md-12 sections-style">
                    <h2 class="sections-h2">Технология строительства</h2>
                    <div class="row">
                        <?php for($i = 1; $i<=3; $i++) { ?>
                        <div class="col-md-4 single-tech">
                            <img src="<?php echo get_field('technology-img-'.$i);  ?>" alt="Как мы строим <?php echo the_title(); ?>">
                            <p><?php echo get_field('technology-desc-'.$i); ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
          <section class="row news sections-style">
            <div class="col-md-12">
              <h2 class="sections-h2">Новости объекта</h2>
            </div>

            <?php
            $args = array(
              'category_name' => 'vremena_goda_2',
              'post_status' => 'publish',
              'posts_per_page' => 4
            );
            $star_news = new WP_Query($args);
            while($star_news->have_posts()) : $star_news->the_post();
              ?>
              <div class="news-item animate-fade-down animation-hide">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $media = get_attached_media('image', $POST->ID);
                  $media = array_shift($media);

                  $image_id = $media->ID;

                  $post_image_medium = image_downsize($image_id, 'medium');

                  echo '<img src="' . $post_image_medium[0] . '" alt="' .  get_the_title() . '" title="' . get_the_title() . '" >'
                  ?>
                  <div class="item-caption"></div>
                </a>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><time class="date-time" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></time></p>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

          </section>
        </div>
        <div class="container-fluid object-translation-bg hidden-xs">
            <div class="container">
                <div class="row translation">
                    <section class="col-md-12 sections-style">
                        <h2 class="sections-h2">Online-трансляция</h2>
                    </section>
                    <div class="row text-center">
                      <script type="text/javascript" src="http://83.239.0.234:9787/html5/js/generator.js" async></script><script type="devline-server/ip-cameras">var stream_params = "ip=83.239.0.234,port=9787,camera=13,quality=60,autoplay=false,resolution=640x480,user=admin,passwd=4928195,id=13"</script>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

          <!-- start: Нижняя форма -->
          <div class="row">
            <div class="container">

              <?php
              $title = 'Остались вопросы? Задайте их менеджеру.'; //заголовок формы
              $form = '[contact-form-7 id="2338" title="Основная форма - Страница объектов"]'; //шорткод формы

              include(TEMPLATEPATH . '/content-form.php'); //шаблон формы с переменными
                  ?>

            </div>
          </div>
          <!-- end: Нижняя форма -->
        </div>

        <div class="container">
           <div class="row documentation">
                <section class="col-md-12 sections-style">
                    <h2 class="sections-h2">Документация</h2>
                    <div class="text-left documents-item">
                       <?php $objects = array(
                   'post_type' => 'objects',
                   'publish' => true,
                    'posts_per_page' => '-1',
               );
                         query_posts($objects); ?> 
                        <p><?php echo get_field('objects_documents', $post->ID); ?></p>
                    </div>
                </section>
            </div>
          <?php wp_reset_postdata(); ?>
        </div>
        <?php get_footer(); ?>