<section class="staff-list-item">

  <img src="<?php echo get_field('staff-photo'); ?>" alt="" width="137" height="auto">

  <h3>
    <span><?php echo get_field('staff-lastname'); ?></span>
    <?php echo get_field('staff-name'); ?>
  </h3>

  <div class="staff-list-item-divider"></div>

  <div class="staff-list-item-position"><?php echo get_field('staff-position'); ?></div>

  <?php if(get_field('staff-phone')) : ?>
  <div class="staff-list-item-phone"><?php echo get_field('staff-phone'); ?></div>
  <?php endif; ?>

</section>