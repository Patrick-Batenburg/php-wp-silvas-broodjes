<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.silvas.nl
 * @since             1.0.0
 * @package           Broodjes
 *
 * @wordpress-plugin
 * Plugin Name:       DoughSystem
 * Plugin URI:        https://github.com/rickdaalhuizen90/broodjes
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Silvas
 * Author URI:        www.silvas.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       broodjes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-broodjes-activator.php
 */
function activate_broodjes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-broodjes-activator.php';
	Broodjes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-broodjes-deactivator.php
 */
function deactivate_broodjes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-broodjes-deactivator.php';
	Broodjes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_broodjes' );
register_deactivation_hook( __FILE__, 'deactivate_broodjes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-broodjes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_broodjes() {

	$plugin = new Broodjes();
	$plugin->run();

}
run_broodjes();