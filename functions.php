<?php

/**
 * Theme Function 
 * 
 * @package Aquila
 */

//To Check Style Sheet PAth WAs Working Or Not  
    

if ( ! defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory()));
}
// It is Used To Check Autoloader Working Or Not
// echo '<pre>';
//      print_r(AQUILA_DIR_PATH );
//      wp_die();

require_once AQUILA_DIR_PATH .'/inc/helpers/autoloader.php';

function aquila_get_theme_instance(){ 
\AQUILA_THEME\Inc\AQUILA_THEME::get_instance();

}

aquila_get_theme_instance();

function aquila_enqueue_script()
{

    // Register Style.
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
    wp_register_style('bootstrap-css', get_template_directory_uri() .'/assets/src/library/node_modules/bootstrap/dist/css/bootstrap.css', [],false,'all');

    // Register Script
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() .'/assets/src/library/node_modules/bootstrap/dist/js/bootstrap.min.js', [ 'jquery' ],false,true); 

    //Enqueue Styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    //Enqueue Script
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_script');
