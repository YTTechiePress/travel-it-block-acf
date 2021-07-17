<?php
/**
 * Plugin Name: Travel Itinerary Block
 * Plugin URI: https://github.com/yttechiepress/travel-it-block-acf
 * Author: TechiePress
 * Author URI: https://github.com/yttechiepress/travel-it-block-acf
 * Description: Travel Itinerary Block built with Advanced Custom Fields ACF Pro
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: travel-it-block
*/

defined( 'ABSPATH' ) or die( 'No authorized access!' );

add_action( 'acf/init', 'techiepress_acf_travel_it_block', 9 );
add_action( 'acf/init', 'techiepress_acf_travel_it_block_settings', 10 );

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

function techiepress_acf_travel_it_block_settings() {

    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_60e97ce2e5410',
            'title' => 'Travel Itinerary Block',
            'fields' => array(
                array(
                    'key' => 'field_60e97cfbac03d',
                    'label' => 'Day/Time',
                    'name' => 'daytime',
                    'type' => 'text',
                    'instructions' => 'Insert e.g. Day 1',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Day 1',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_60e97d2eac03e',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_60e97d78ac040',
                    'label' => 'Day\'s Activity Title',
                    'name' => 'days_activity_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_60e97decac044',
                    'label' => 'Available Service',
                    'name' => 'available_service',
                    'type' => 'group',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_60e97e26ac045',
                            'label' => '',
                            'name' => 'breakfast',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => 'Breakfast',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_60e97e48ac047',
                            'label' => '',
                            'name' => 'lunch',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => 'Lunch',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_60e97e46ac046',
                            'label' => '',
                            'name' => 'dinner',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => 'Dinner',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_60e97d9fac041',
                    'label' => 'AM Decription',
                    'name' => 'am_decription',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_60e97dbfac042',
                    'label' => 'PM Decription',
                    'name' => 'pm_decription',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_60e97dcfac043',
                    'label' => 'Overnight',
                    'name' => 'overnight',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/travelitblock',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
    endif;
}