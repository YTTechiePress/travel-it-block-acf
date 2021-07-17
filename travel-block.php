<?php
/**
 * Plugin Name: Travel Itinerary Block
 * Plugin URI: https://github.com/yytechiepress/travel-it-block
 * Author: TechiePress
 * Author URI: https://github.com/yytechiepress/travel-it-block
 * Description: Travel Itinerary Block
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: travel-it-block
*/

defined( 'ABSPATH' ) or die( 'No authorized access!' );

add_action( 'acf/init', 'techiepress_acf_travel_it_block' );

function techiepress_acf_travel_it_block() {

    // Check function exists.
    if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
        acf_register_block_type( array(
            'name'              => 'travelitblock',
            'title'             => __('Travel Itinerary Block'),
            'description'       => __('Travel Itinerary Block to add good information for traveller.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
            'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/travel-block.php',
            'category'          => 'media',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'Travel', 'Itinerary', 'Techiepress' ),
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'travel-it-block', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', '', '1.0.0', 'all' );
            }            
        ) );
    }
}