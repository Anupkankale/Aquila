<?php

/**
 * 
 * Enqueue theme Assets
 * 
 * @package  Aquila
 * 
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
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
        // in a Class We Use Like This We Need to Call function By this Variable
        //add_action('wp_enqueue_scripts', 'register_script');

        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {

        // Register Style.
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(AQUILA_DIR_PATH . '/style.css'));
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/node_modules/bootstrap/dist/css/bootstrap.css', [], false, 'all');

        //Enqueue Styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts()
    {

        // Register Script
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/main.js', [], filemtime(AQUILA_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/node_modules/bootstrap/dist/js/bootstrap.min.js', ['jquery'], false, true);

        //Enqueue Script
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
