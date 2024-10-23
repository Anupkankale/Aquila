<?php
/**
 * 
 * Bootstrap the Theme.
 * 
 * @package Aquila
 * 
 */

 namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME{
 
    use Singleton;
   
    protected function __construct(){
        //load class

        wp_die('hello');
    }
    
    protected function set_hooks(){
        //action and Filters

    }


 }