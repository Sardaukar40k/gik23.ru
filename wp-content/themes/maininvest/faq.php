<?php /*Template Name: F.A.Q.*/ ?>
<?php get_header(); ?>
<div class="container page">
    <!-- Хлебные крошки -->
    <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->
    <div class="row">
        <section class="col-md-12 page-content">
                 <div class="row faq">
                    <div class="col-md-12 text-center"><?php the_title('<h1>', '</h1>'); ?></div>
                    <div class="col-md-4 faq-person">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/olesya.jpg" alt="" class="img-circle">
                        <p class="faq-lastname">Отвечает на ваши вопросы</p>
                        <p class="faq-name">заместитель генерального директора по управлению продажами</p>
                        <p>Бочарникова Алеся Викторовна</p>
                    </div>
                    <?php $faq = array(
                        'post_type' => 'faq',
                        'publish' => true,
                        'paged' => get_query_var('paged'),
                         );
                        query_posts($faq);
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- single FAQ item -->
                    <div class="col-md-8 col-md-offset-4">
                        <div class="accordion" id="accordion<?php echo ($post->ID); ?>">
                            <div class="accordion-group faq-item">
                                <div class="accordion-heading">
                                    <h2 class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo ($post->ID); ?>" data-target="#collapse<?php echo ($post->ID); ?>">
                                       <?php echo get_field('question'); ?>
                                    </h2>
                                </div>
                                <div id="collapse<?php echo ($post->ID); ?>" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <?php echo get_field('answer'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /single FAQ item -->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>