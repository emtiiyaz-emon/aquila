<?php 
/**
 * Theme Function.
 * 
 * @package Aquila
 */


function aquila_enqueue_scripts(){
    // register css
    // style.css
    wp_register_style('style-css' , get_stylesheet_uri(), [] , fileatime( get_template_directory().'/style.css'), 'all');

    // enqueue css
    wp_enqueue_style('style-css');

    // register js
    // main.js
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], fileatime( get_template_directory().'/assets/main.js'), true, 'all' );

    // enqueue js
    wp_enqueue_script('main-js');

}
add_action('wp_enqueue_scripts' , 'aquila_enqueue_scripts');
?>

