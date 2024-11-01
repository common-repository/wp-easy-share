<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              bplv.com.np
 * @since             1.0.0
 * @package           Wes
 *
 * @wordpress-plugin
 * Plugin Name:       WP Easy Share
 * Plugin URI:        http://bplv.com.np/wp-easy-share
 * Description:       WP Easy Share is your ultimate solution to your need of adding social share feature on your theme.
 * Version:           2.0.0
 * Author:            Biplav Subedi
 * Author URI:        http://bplv.com.np
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-easy-share
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'WES_FILE_PATH', __FILE__ );
define( 'WES_BASE_PATH', dirname( __FILE__ ) );
define( 'WES_FILE_URL', plugins_url( '', __FILE__ ) );
define( 'WES_IMG_URL', WES_FILE_URL.'/admin/images/' );
define( 'WES_VERSION', '1.0.0' );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wes-activator.php
 */
function activate_wes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wes-activator.php';
	Wes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wes-deactivator.php
 */
function deactivate_wes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wes-deactivator.php';
	Wes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wes' );
register_deactivation_hook( __FILE__, 'deactivate_wes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wes() {

	$plugin = new Wes();
	$plugin->run();

}
run_wes();
