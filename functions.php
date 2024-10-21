<?php
/**
 * Theme Function 
 * 
 * @package Aquila
 */

//To Check Style Sheet PAth WAs Working Or Not  
//   echo '<pre>';
//     print_r(get_template_directory());
//     wp_die();

 function aquila_enqueue_script(){

    //wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
    wp_enqueue_style('stylesheett',get_stylesheet_uri(), [], filemtime( get_template_directory().'/style.css'));

 }

 add_action('wp_enqueue_scripts','aquila_enqueue_script');

 ?>