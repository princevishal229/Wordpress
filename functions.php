<?php
/**
 * 
 * Template Name: Functions
 * 
 */
// action hook example
function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','theme_setup');

// filter hook example
function custom_excerpt_length(){
     return 15;  
}

add_filter('excerpt_length','custom_excerpt_length');

// adding css and js files using action hooks
// wp_enqueue_script() or wp_enqueue_style()
function add_theme_scripts(){
    wp_enqueue_style('main-stylesheet',get_stylesheet_uri());
    
    // adding magic.css files
    wp_enqueue_style('magin',get_template_directory_uri(). '/css/magin.css');
}

    // adding js files
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js');

add_action('wp_enqueue_scripts','add_theme_scripts');

// register navigation menu
function register_my_menu(){
    register_nav_menus(
        array(
           'header-menu'=> __('Header Menu'),
           'footer-menu'=> __('Footer Menu')

        )
    );
}
add_action('init','register_my_menu');

// register widgets(sidebar)
function my_register_widgets(){
    register_sidebar(
        array(
            'id'=> ('new_sidebar'),
            'name' => __('New Sidebar'),
            'description' => __('A short description of the sidebar')

        )
    );

    
        register_sidebar(
            array(
                'id'=> ('footer_sidebar'),
                'name' => __('footer Sidebar'),
                'description' => __('A short description of the sidebar')
    
            )
        );


}


add_action('widgets_init','my_register_widgets');
?>