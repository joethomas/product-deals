<?php
/*
	Plugin Name: Product Deals
	Description: This plugin registers a Deals post type.
	Plugin URI: https://github.com/joethomas/product-deals
	Version: 1.1.2
	Author: Joe Thomas
	Author URI: https://github.com/joethomas
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	Text Domain: product-deals
	Domain Path: /languages/

	GitHub Plugin URI: https://github.com/joethomas/product-deals
	GitHub Branch: master
*/

// Prevent direct file access
defined( 'ABSPATH' ) or exit;


/* Global Variables & Constants
==============================================================================*/

/**
 * Define the constants for use within the plugin
 */

// Plugin
function joe_pdcpt_get_plugin_data_version() {
	$plugin = get_plugin_data( __FILE__, false, false );

	define( 'JOE_PDCPT_VER', $plugin['Version'] );
	define( 'JOE_PDCPT_TEXTDOMAIN', $plugin['TextDomain'] );
	define( 'JOE_PDCPT_NAME', $plugin['Name'] );
}
add_action( 'init', 'joe_pdcpt_get_plugin_data_version' );

define( 'JOE_PDCPT_PREFIX', 'product-deals' );


/* Bootstrap
==============================================================================*/

require_once( 'includes/deal-comments.php' ); // controls comments on CPT
require_once( 'includes/deal-cpt.php' ); // controls CPT
require_once( 'includes/deal-taxonomies.php' ); // controls CPT taxonomies
require_once( 'includes/updates.php' ); // controls plugin updates