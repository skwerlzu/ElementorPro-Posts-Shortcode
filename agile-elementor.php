<?php
/**
 * Agile Elementor WordPress Plugin
 *
 * @package ElementorAgile
 *
 * Plugin Name: Agile Elementor
 * Description: Simple Elementor plugin example
 * Plugin URI:  https://www.benmarshall.me/build-custom-elementor-widgets/
 * Version:     1.0.0
 * Author:      Ben Marshall
 * Author URI:  https://www.benmarshall.me
 * Text Domain: agile-elementor
 */

define( 'AGILE_ELEMENTOR', __FILE__ );

/**
 * Include the Agile_Elementor class.
 */
require plugin_dir_path( AGILE_ELEMENTOR ) . 'class-agile-elementor.php';
