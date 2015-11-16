<?php get_header(); ?>
<div class="container-fluid commercial-single">
  <!-- <div class="row"> -->
    <div class="container">
      <section class="row sections-style">
        <div class="col-md-12">
          <h1 class="sections-h2"><?php the_title(); ?></h1>
        </div>
      </section>

      <!-- Получаем количество изображений в записи -->
        <?php
          $commercial_gallery = types_get_field_meta_value('commercail_object_photo');
          $img_count = count($commercial_gallery);
        ?>
      <!-- /Получаем количество изображений в записи -->

      <!-- start: Карусель -->
      <!-- область слайдов -->
      <div class="row commercial-single__gallery">
          <div class="col-md-8 commercial-single__gallery__slide" id="slider">
            <div id="carousel-bounding-box">
              <div id="ojectsCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <!-- Элемент карусели -->
                    <?php for($i = 0; $i < $img_count; $i++) : ?>
                      <div class="item <?php if($i == 0 ) {echo ('active'); } ?>" data-slide-number="<?php echo $i; ?>">
                        <a href="<?php echo types_render_field('commercail_object_photo', array('index' => $i, 'url' => true ) ); ?>"><img src="<?php echo types_render_field('commercail_object_photo', array('index' => $i, 'url' => true ) ); ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></a>
                      </div>
                    <?php endfor; ?>
                  <!-- /Элемент карусели -->
                </div>
              </div>
            </div>
          </div>
        <!-- /область слайдов -->

        <!-- навигация -->
          <div class="col-md-4 hidden-sm hidden-xs commercial-single__gallery__navigation" id="slider-thumbs">
            <ul class="list-unstyled">

              <!-- элемент навигации -->
              <?php for($i = 0; $i < $img_count; $i++) : ?>
                <li>
                  <a id="carousel-selector-<?php echo $i; ?>" <?php if( $i == 0 ) { echo ('class="selected"'); } ?>>
                    <img src="<?php echo types_render_field('commercail_object_photo', array('index' => $i, 'url' => true, 'width' => '151', 'height' => '114' ) ); ?>" title="<?php the_title(); ?>">
                  </a>
                </li>
              <?php endfor; ?>
              <!-- /элемент навигации -->
            </ul>
          </div>
        <!-- /навигация -->
        </div> <!-- /commercial-single__gallery -->
        <!-- end: Карусель -->

      <section class="row commercial-single__meta">
        <div class="col-md-8">
          <div class="commercial-single__meta__price">
            <p>Стоимость: <span><?php echo get_field('commercial_price'); ?></span></p>
          </div>
          <table>
            <!-- start: Площадь -->
            <?php if(get_field('commercial_space')) : ?>
            <tr>
              <td>Площадь</td>
              <td><strong><?php echo get_field('commercial_space'); ?> м<sup>2</sup></strong></td>
            </tr>
            <?php endif; ?>
            <!-- end: Площадь -->

            <!-- start: Этаж -->
            <?php if(get_field('commercial_floor')) : ?>
            <tr>
              <td>Этаж</td>
              <td><strong><?php echo get_field('commercial_floor'); ?> этаж</strong></td>
            </tr>
            <?php endif; ?>
            <!-- end: Этаж -->

            <!-- start: Высота потолков -->
            <?php if(get_field('commercial_ceiling_height')) : ?>
            <tr>
              <td>Высота потолков</td>
              <td><strong><?php echo get_field('commercial_ceiling_height'); ?></strong></td>
            </tr>
            <?php endif; ?>
            <!-- start: Высота потолков -->

            <!-- start: Отделка -->
            <?php if(get_field('commercial_finishing')) : ?>
            <tr>
              <td>Отделка</td>
              <td><strong><?php echo get_field('commercial_finishing'); ?></strong></td>
            </tr>
            <?php endif; ?>
            <!-- start: Отделка -->

            <!-- start: Литер -->
            <?php if(get_field('commercial_housing')) : ?>
            <tr>
              <td>Литер</td>
              <td><strong><?php echo get_field('commercial_housing'); ?></strong></td>
            </tr>
            <?php endif; ?>
            <!-- start: Литер -->
          </table>
        </div>
      </section>
      <section class="row commercial-single__description">
        <div class="col-md-8">
          <?php the_content(); ?>
        </div>
      </section>
      <div class="row commercial-single__adress">
        <div class="col-md-8">
          <p>Адрес: <strong><?php echo get_field('commercial_adress'); ?></strong></p>
        </div>
      </div>
      <div class="row commercial-single__map">
        <div class="col-md-8">
          <?php
            $map = get_field('commercail_map');
            include(locate_template('content-acf-map.php'));
          ?>
        </div>
      </div>
      <!-- start: Форма обратной связи -->
      <?php
        $form ='[contact-form-7 id="2522" title="Заявка со страницы Коммерческого объекта"]';
        include(locate_template('content-main-form.php'));
      ?>
      <!-- end: Форма обратной связи -->

    </div> <!-- /.container -->
    <!-- </div> --> <!-- /.row -->
</div> <!-- /.container-fluid -->
<?php get_footer(); ?>