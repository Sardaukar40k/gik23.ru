<div class="category-list hidden-sm hidden-xs">
  <ul>
    <?php $args = array(
        'show_option_all'    => '',
        'show_option_none'   => __('Нет категорий'),
        'orderby'            => 'name',
        'order'              => 'ASC',
        'show_last_update'   => 1,
        'style'              => 'list',
        'show_count'         => 0,
        'hide_empty'         => 1,
        'use_desc_for_title' => 1,
        'child_of'           => 0,
        'feed'               => '',
        'feed_type'          => '',
        'feed_image'         => '',
        'exclude'            => '',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => true,
        'title_li'           => ( '' ),
        'number'             => NULL,
        'echo'               => 1,
        'depth'              => 1,
        'pad_counts'         => 0,
        'taxonomy'           => 'category'
    );
    ?>
    <?php wp_list_categories($args); ?>
  </ul>
</div>