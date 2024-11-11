<?php
/**
 * 
 * Register Menues
 * 
 * @package  Aquila
 * 
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus
{

 use Singleton;

    protected function __construct()
    {
        //load class

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //Action 
       
        add_action('init',[$this,'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus([
            'aquila-header-menu' => esc_html__('Header Menu', 'aquila'),
            'aquila-footer-menu' => esc_html__('Footer Menu', 'aquila'),
        ]);
    }

    public function get_menu_id($location){
        // Get All The Location Of Menue Inside the Function
        $locations = get_nav_menu_locations();

        // echo '<pre>';
        // print_r($locations) ;
        // wp_die();

        //Get Object ID My Location
        $menu_id = $locations [ $location];

      

        return ! empty ($menu_id) ? $menu_id : '';
      
    }


}
