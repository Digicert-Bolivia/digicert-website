<?php
/**
 * Plugin Name:       Carousel Slider Block for Gutenberg
 * Plugin URI:        https://wordpress.org/plugins/carousel-block
 * Description:       A responsive carousel slider for Gutenberg that allows adding any blocks to slides.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.11
 * Author URI:        http://virgiliudiaconu.com/
 * License:           GPL-2.0-or-later
 * License URI:       http://virgiliudiaconu.com
 * Text Domain:       carousel-slider-block
 *
 * @package carousel-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Carousel_Slider_Block {
    const VERSION = '1.0.11'; // Plugin version

    /**
     * Actions and filters.
     */
    public static function register() {
        add_action('init', ['Carousel_Slider_Block', 'init']);
    }

    /**
     * Registers the blocks and their assets.
     */
    public static function init() {
        register_block_type(__DIR__ . '/build/carousel', [
            'render_callback' => ['Carousel_Slider_Block', 'render_carousel_slider_block']
        ]);
        register_block_type(__DIR__ . '/build/slide');
    }

    /**
     * The render callback to handle the block output.
     *
     * @param array $attributes Block attributes.
     * @param string $content Block save content.
     * @return string Rendered block content.
     */
    public static function render_carousel_slider_block($attributes, $content) {
        if (!is_admin()) {
            wp_enqueue_script(
                'carousel-block-slick',
                plugins_url('/vendor/slick/slick.min.js', __FILE__),
                ['jquery'],
                self::VERSION,
                true
            );
			wp_enqueue_style(
                'carousel-block-slick',
                plugins_url('/vendor/slick/slick.min.css', __FILE__),
                [],
                self::VERSION,
                false
            );
        }
        return $content;
    }
}

// Register the plugin
Carousel_Slider_Block::register();

