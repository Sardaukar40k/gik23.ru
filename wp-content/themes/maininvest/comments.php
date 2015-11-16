<div id="comments" class="comments-area">
<?php if(have_comments()) : ?>
  <h3 class="comments-title">комментарии</h3>

  <ul class="comment-list list-unstyled">
    <?php
    wp_list_comments( array(
      'avatar_size' =>  '50',
      'style'       =>  'ul',
      'short_ping'  =>  true,
      'callback'	  =>  'my_comment',
      'per_page'    => '3'
    ) );
    ?>
  </ul><!-- .comment-list -->
  <?php endif; ?>

  <nav class="comment-navigation" role="navigation">
    <?php paginate_comments_links(array('prev_text' => '«', 'next_text' => '»') ); ?>
  </nav><!-- /comment-nav -->

  <?php
  $commenter = wp_get_current_commenter();
  $fields =  array(
    'author' 		=>
      '<p class="comment-form-author">' .
      '<input placeholder="Ваше имя" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  		=>
      '<p class="comment-form-email">',
    '<input placeholder="e-mail" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>'
  );
  $comment_form_args = array (
    'comment_notes_after'  => '',
    'comment_notes_before' => '',
    'fields'               => apply_filters( 'comment_form_default_fields', $fields),
    'comment_field'		   => '<p class="comment-form-comment clearfix">' . '<textarea placeholder="Комментарий" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
  );

  comment_form($comment_form_args);
	?>

</div><!-- #comments -->
