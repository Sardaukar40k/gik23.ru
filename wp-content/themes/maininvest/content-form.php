<div class="row">
  <section class="main-form text-center <?php echo ($form_custom_class); ?>">
    <h2><?php echo ($title); ?></h2>

    <?php if($subtitle) : ?>

      <p><?php echo ($subtitle); ?></p>

    <?php endif; ?>

    <?php echo do_shortcode($form); ?>

    <p class="form-desc"><i class="fa fa-lock"></i> Ваши данные останутся в безопасности. Заполнение формы ни к чему Вас не обязывает.</p>
  </section>
</div>