<div class="modal fade" id="modal-form" tabindex="-1" role="dialog">

  <div class="popup-form">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h2>Заказать<br>обратный звонок</h2>
    <?php if( is_page( 'remonty' ) ) {
      echo do_shortcode( '[contact-form-7 id="2395" title="Заявка со страницы Ремонты"]' ); //форма для Ремонтов
    } elseif ( is_page( 'rassrochka' ) ) {
      echo do_shortcode( '[contact-form-7 id="2455" title="Заявка со страницы Рассрочка"]' ); //форма для Рассрочки
    } elseif ( is_page( 'ipoteka' ) ) {
      echo do_shortcode( '[contact-form-7 id="2367" title="Основная форма - Страница Ипотеки"]' ); //форма для Ипотеки
    }elseif ( is_page( 'gosprogramma' ) ) {
      echo do_shortcode( '[contact-form-7 id="2355" title="Основная форма - Страница Госпрограммы"]' ); //форма для Госпрограммы
    }
      ?>
    <p class="form-desc"><i class="fa fa-lock"></i> Ваши данные никогда не будут переданы третьим лицам</p>
  </div>
</div><!-- /.modal -->