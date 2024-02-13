<?php

 function followandrew_theme_support() { 
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
 }
 add_action('after_setup_theme' , 'followandrew_theme_support');

 function followandrew_themes() { 
    $locations = array(
        'primary' => 'Desktop Left Slider' , 
        'footer' => 'Footer Desktop Menu'
    );
    
    register_nav_menus($locations);
 }

 add_action('init' , 'followandrew_themes');

function followandrew_register_styles() {
    $version = wp_get_theme( 'Version' );
    wp_enqueue_style('followandrew_bootstrap', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles');

 function followandrew_register_scripts() { 
    wp_enqueue_script('followandrew-main', get_template_directory_uri(). "/assets/js/main.js" , array() , '1.0' , true);
 }

 function followandrew_widget_areas() { 
    register_sidebar(
        array(
            'before_title' => '' , 
            'after_title' => '' , 
            'before_widget' => '<ul>' , 
            'after_widget' => '</ul>' ,
            'name' => 'Sidebar Area' , 
            'id' => 'sidebar-1' , 
            'description' => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '' , 
            'after_title' => '' , 
            'before_widget' => '<ul>' , 
            'after_widget' => '</ul>' ,
            'name' => 'Footer Area' , 
            'id' => 'footer-1' , 
            'description' => 'Footer Widget Area'
            )
    );
 }
 add_action('widgets_init' , 'followandrew_widget_areas');


?>