<section class="row main-partners sections-style">
    <h2 class="sections-h2 text-center">Наши партнёры</h2>
    <div id="partners-carusel" class="owl-carousel">
        <?php
        $partners = array(
            'post_type' => 'partners',
            'publish' => true,
            'paged' => get_query_var('paged'),
            'posts_per_page' => '-1'
        );
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