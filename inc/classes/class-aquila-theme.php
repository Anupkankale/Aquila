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

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load class

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Action
         */
        add_action('after_setup_theme',[ $this,'setup_theme']);

        }

        //Its Is Important For Custmization option in Them To Add Site Title
        public function setup_theme(){
          add_theme_support('title-tag'); 

          //These Section For Site Logo
          add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height'=> 100,
		    'width' => 400,
		    'flex-height' => true,
		    'flex-width'  => true,
	        'unlink-homepage-logo' => true, 
        ]); 
        }
}
