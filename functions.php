<?php 
/**
 * Theme Function.
 * 
 * @package Aquila
 */


function aquila_enqueue_scripts(){
    // register style css
    // style.css
    wp_register_style('style-css' , get_stylesheet_uri(), [] , fileatime( get_template_directory().'/style.css'), 'all');
    wp_register_style('bootstrap-css' , get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [] , false ,  'all');

    // enqueue css
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');



    // register scripts js
    // main.js
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], fileatime( get_template_directory().'/assets/main.js'), true, 'all' );
    wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true, 'all' );

    // enqueue js
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

}
add_action('wp_enqueue_scripts' , 'aquila_enqueue_scripts');
?>

