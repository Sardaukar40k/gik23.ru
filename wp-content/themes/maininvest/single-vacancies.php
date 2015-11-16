<?php get_header(); ?>

<div class="container-fluid page single-vacancies">
  <div class="container">
    <!-- Хлебные крошки -->
    <?php get_template_part('content', 'breadcrumbs'); ?>
    <!-- /Хлебные крошки -->
    <div class="row">
      <section class="single-vacancies__content">
        <h1><?php the_title(); ?></h1>
        <div class="single-vacancies__content__text">
          <?php the_content(); ?>
        </div>

        <?php if (get_field('vacancies_requirements')) : ?>
          <div class="single-vacancies__content__item">
            <h2>Требования</h2>
            <?php echo get_field('vacancies_requirements'); ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('vacancies_duties')) : ?>
          <div class="single-vacancies__content__item">
            <h2>Обязанности</h2>
            <?php echo get_field('vacancies_duties'); ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('vacancies_conditions')) : ?>
          <div class="single-vacancies__content__item">
            <h2>Условия</h2>
            <?php echo get_field('vacancies_conditions'); ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('vacancies_salary')) : ?>
          <div class="single-vacancies__content__salary">
            <?php echo get_field('vacancies_salary'); ?>
          </div>
        <?php endif; ?>
      </section>
      <div class="single-vacancies__contacts">
        <p><strong>Подробнее по телефону:</strong> 8-918-417-38-38, Вероника Александровна</p>
        <p><strong>Резюме отправляйте на электронную почту:</strong> <a href="mailto:personal@maininvest.ru>">personal@maininvest.ru</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
