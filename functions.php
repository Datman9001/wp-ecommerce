<?php
    require_once('widgets/class-wp-widget-categories.php');

//Theme support

function ms_theme_setup(){
    add_theme_support('custom-logo');

    //Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'ms_theme_setup');

//widget location
function ms_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => ' ',
        'after_widget'  => ' '
         
		 
    ));
}

add_action('widgets_init', 'ms_init_widgets');


//Register widget
function ms_register_widgets(){
    register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'ms_register_widgets');