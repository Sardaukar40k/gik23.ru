<?php


function new_excerpt_more($more) {
    return ' ... <a href="'. get_permalink($post->ID) . '">' . 'далее' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


        //меню
 register_nav_menus ( array( 'main-menu' => 'Основное меню', 'xs-menu' => 'Меню для мобильных'));

    // Миниатюра для записей/страниц
    add_theme_support('post-thumbnails');

    // Подключение JQuery
    if(!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"), false, '1.11.2');
        wp_enqueue_script('jquery');
    }
    // Скрипт на вывод лет-год-года в отзывах
    function num2word($rewAge) {
        $i = substr($rewAge, -1, 1);
        if ($vg == "1") {
        $j = " год";
        } else {
            if ($i == "0") {
                $j = " лет";
            } else {
                if ($i < "5") {
                    $j = " года";
                }
                else {
                    $j = " лет";
                }
            }
        }
        echo ($j);
    }
    
    //Хлебные крошки
    function dimox_breadcrumbs() {
    
     /* === ОПЦИИ === */
     $text['home'] = 'ГИК'; // текст ссылки "Главная"
     $text['category'] = '%s'; // текст для страницы рубрики
     $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
     $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
     $text['author'] = 'Статьи автора %s'; // текст для страницы автора
     $text['404'] = 'Ошибка 404'; // текст для страницы 404
     $text['page'] = 'Страница %s'; // текст 'Страница N'
     $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
    
     $delimiter = '→'; // разделитель между "крошками"
     $delim_before = '<span class="divider">'; // тег перед разделителем
     $delim_after = '</span>'; // тег после разделителя
     $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
     $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
     $show_title = 1; // 1 - показывать подсказку (title) для ссылок, 0 - не показывать
     $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
     $before = '<span class="current">'; // тег перед текущей "крошкой"
     $after = '</span>'; // тег после текущей "крошки"
     /* === КОНЕЦ ОПЦИЙ === */
    
     global $post;
     $blogPage = '<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://gik23.ru/blog/" itemprop="url"><span itemprop="title">Главная</span></a></span>';
     $home_link = home_url('/');
     $link_before = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
     $link_after = '</span>';
     $link_attr = ' itemprop="url"';
     $link_in_before = '<span itemprop="title">';
     $link_in_after = '</span>';
     $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
     $frontpage_id = get_option('page_on_front');
     $parent_id = $post->post_parent;
     $delimiter = ' ' . $delim_before . $delimiter . $delim_after . ' ';
    
     if (is_home() || is_front_page()) {
    
     if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';
    
     } else {
    
     echo '<div class="breadcrumbs">';
     if ($show_home_link == 1) echo sprintf($link, $home_link, $text['home']);
    
     if ( is_category() ) {
     $cat = get_category(get_query_var('cat'), false);
     if ($cat->parent != 0) {
     $cats = get_category_parents($cat->parent, TRUE, $delimiter);
     $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
     $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
     if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
     if ($show_home_link == 1) echo $delimiter;
     echo $cats;
     }
     if ( get_query_var('paged') ) {
     $cat = $cat->cat_ID;
     echo $delimiter . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $delimiter . $before . sprintf($text['page'], get_query_var('paged')) . $after;
     } else {
     if ($show_current == 1) echo $delimiter . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
     }
    
     } elseif ( is_search() ) {
     if ($show_home_link == 1) echo $delimiter;
     echo $before . sprintf($text['search'], get_search_query()) . $after;
    
     } elseif ( is_day() ) {
     if ($show_home_link == 1) echo $delimiter;
     echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
     echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $delimiter;
     echo $before . get_the_time('d') . $after;
    
     } elseif ( is_month() ) {
     if ($show_home_link == 1) echo $delimiter;
     echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
     echo $before . get_the_time('F') . $after;
    
     } elseif ( is_year() ) {
     if ($show_home_link == 1) echo $delimiter;
     echo $before . get_the_time('Y') . $after;
    
     } elseif ( is_single() && !is_attachment() ) {
     if ($show_home_link == 1) echo $delimiter;
     if ( get_post_type() != 'post' ) {
     $post_type = get_post_type_object(get_post_type());
     $slug = $post_type->rewrite;
     printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
     if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
     } else {
     $cat = get_the_category(); $cat = $cat[0];
     $cats = get_category_parents($cat, TRUE, $delimiter);
     if ($show_current == 0 || get_query_var('cpage')) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
     $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
     if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
     echo $cats;
     if ( get_query_var('cpage') ) {
     echo $delimiter . sprintf($link, get_permalink(), get_the_title()) . $delimiter . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
     } else {
     if ($show_current == 1) echo $before . get_the_title() . $after;
     }
     }
    
     // custom post type
     } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
     $post_type = get_post_type_object(get_post_type());
     if ( get_query_var('paged') ) {
     echo $delimiter . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $delimiter . $before . sprintf($text['page'], get_query_var('paged')) . $after;
     } else {
     if ($show_current == 1) echo $delimiter . $before . $post_type->label . $after;
     }
    
     } elseif ( is_attachment() ) {
     if ($show_home_link == 1) echo $delimiter;
     $parent = get_post($parent_id);
     $cat = get_the_category($parent->ID); $cat = $cat[0];
     if ($cat) {
     $cats = get_category_parents($cat, TRUE, $delimiter);
     $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
     if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
     echo $cats;
     }
     printf($link, get_permalink($parent), $parent->post_title);
     if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
    
     } elseif ( is_page() && !$parent_id ) {
     if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
    
     } elseif ( is_page() && $parent_id ) {
     if ($show_home_link == 1) echo $delimiter;
     if ($parent_id != $frontpage_id) {
     $breadcrumbs = array();
     while ($parent_id) {
     $page = get_page($parent_id);
     if ($parent_id != $frontpage_id) {
     $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
     }
     $parent_id = $page->post_parent;
     }
     $breadcrumbs = array_reverse($breadcrumbs);
     for ($i = 0; $i < count($breadcrumbs); $i++) {
     echo $breadcrumbs[$i];
     if ($i != count($breadcrumbs)-1) echo $delimiter;
     }
     }
     if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
    
     } elseif ( is_tag() ) {
     if ($show_current == 1) echo $delimiter . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
    
     } elseif ( is_author() ) {
     if ($show_home_link == 1) echo $delimiter;
     global $author;
     $author = get_userdata($author);
     echo $before . sprintf($text['author'], $author->display_name) . $after;
    
     } elseif ( is_404() ) {
     if ($show_home_link == 1) echo $delimiter;
     echo $before . $text['404'] . $after;
    
     } elseif ( has_post_format() && !is_singular() ) {
     if ($show_home_link == 1) echo $delimiter;
     echo get_post_format_string( get_post_format() );
     }
    
     echo '</div><!-- .breadcrumbs -->';
    
     }
    } // end dimox_breadcrumbs()

    //Счётчик постов
    function posts_count($post_name){
        $query_posts_args = array(
            'post_type' => $post_name,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            );
        $query_posts = new WP_Query( $query_posts_args );
        return $query_posts->post_count;
    }

function my_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case '' : ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>">
                <div class="comment-author vcard">
                    <?php printf(__('<cite class="fn">%s</cite> <span class="says"></span>'), get_comment_author()) ?> <span class="comment-meta commentmetadata"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></span> 
                </div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <div class="comment-awaiting-verification"><?php _e('Ваш комментарий ожидает модерации.') ?></div>
                <?php endif; ?>
                <div class="comment-inner">
                    <?php echo get_avatar( $comment->comment_author_email, $args['avatar_size']); ?>
                    <div class="comment-inner-text">
                        <?php comment_text() ?>
                    </div>
                </div>
                <div class="comment-reply clearfix">
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    <?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
                </div>
            </div>
        <?php
            break;
            endswitch;
            }

/* ----- Шорткоды ----- */

// --------------------------------------------------------------------------*

// Партнёрская карусель
function partners_func( $atts ) {
    extract( shortcode_atts( array(
    ), $atts ) );

    return "";
}
add_shortcode( 'partners', 'partners_func' );
// --------------------------------------------------------------------------*


/* ----- /Шорткоды ----- */
?>