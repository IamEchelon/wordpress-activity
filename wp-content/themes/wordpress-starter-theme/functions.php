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

?>
