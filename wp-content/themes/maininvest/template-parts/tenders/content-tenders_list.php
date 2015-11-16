<?php
  $args = array (
    'post_type' => 'tenders',
    'numberposts' => 5,
    'post-_status' => 'publish'
  );

  $tenders = get_posts($args);

  foreach($tenders as $post) :

    setup_postdata($post);
?>
    <section class="row tenders-item">
      <p class="tenders-item-deadline"><?php echo get_field('tender-deadline'); ?></p>
      <h1><a href="<?php the_permalink(); ?>"><?php echo get_field('tender-name'); ?> - <?php echo get_field('tender-subject', false, false); ?></a></h1>
      <p class="tenders-item-adress"><?php echo get_field('tender-adress'); ?></p>
    </section>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
