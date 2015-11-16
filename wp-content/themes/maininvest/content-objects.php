    <section class="row main-complexes sections-style">
        <h2 class="sections-h2 text-center">Выберите свою квартиру</h2>
        <div class="col-md-12 main-objects">
            <?php
            $object = array(
                'post_type' => 'objects',
                'publish' => true,
                'paged' => get_query_var('paged'),
                'posts_per_page' => '-1'
            );
            $query = new WP_Query($object);
            while ($query->have_posts()) : $query->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="main-objects-item">
                    <div class="beneffit-wrapper">
                        <img src=" <?php echo get_field('object-icon'); ?>" alt="" class="main-object-icon">
                        <p class="object-item-benefit" style="background-color: <?php echo get_field('object-benefit-color'); ?>"><?php echo get_field('object-benefit'); ?></p>
                    </div>
                    <img src="<?php echo get_field('object-preview'); ?>" alt="<?php echo get_post_meta($post->ID,'title', true); ?>"  width="149" class="img-responsive">
                    <h3><?php echo get_field('object-title'); ?></h3>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <a href="obekty/" class="main-objects__more-link">Все объекты</a>
        </div>
    </section>