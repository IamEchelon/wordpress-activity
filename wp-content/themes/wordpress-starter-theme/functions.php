<?php
/*
==========================================================
Sidebar Function
==========================================================
*/

function widget_setup(){
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Sidebar for displaying upcoming events data',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init','widget_setup');

/*
==========================================================
Category Filter
==========================================================
*/

function exclude_category($query) {
if ( $query->is_front_page() ) {
$query->set('cat', '-191');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');


?>
