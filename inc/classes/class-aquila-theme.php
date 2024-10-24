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

    protected function setup_hooks()
    {
        /**
         * Action
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    //Its Is Important For Custmization option in Them To Add Site Title
    public function setup_theme()
    {
        add_theme_support('title-tag');

        //These Section For Site Logo
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width'  => true,

        ]);

        // It Is Use For Theme Default BackGround Color
        add_theme_support(
            'custom-background',
            [
                'default-color' => '#fff',
                'default-image' => '',
                'default-repeat' => 'no-repeat',
            ]
        );

        add_theme_support( 'post-thumbnails' );

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support( 'automatic-feed-links');

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            ]
            );

           add_editor_style();
           
        //    add_theme_support();
    }
}
