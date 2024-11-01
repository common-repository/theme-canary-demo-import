<?php
/*
Plugin Name: Theme Canary Demo Import
Plugin URI: https://themecanary.com/plugins/theme-canary-demo-import/
Description:Theme Canary Demo Import is a simple demo importer WordPress plugin that allows you to import the dummy content of Canary Themes within a few click
Version: 1.0.5
Author: Theme Canary
Author URI: http://www.themecanary.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: theme-canary-demo-import
*/

defined('ABSPATH') or die("you do not have access to this page!");

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'THEME_CANARY_DEMO_IMPORT_VERSION', '1.0.5' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-theme-canary-demo-importer-activator.php
 */
function activate_theme_canary_demo_importer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/demo-importer-activator.php';
	Theme_Canary_Demo_Import_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-theme-canary-demo-importer-deactivator.php
 */
function deactivate_theme_canary_demo_importer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/demo-importer-deactivator.php';
	Theme_Canary_Demo_Import_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_theme_canary_demo_importer' );
register_deactivation_hook( __FILE__, 'deactivate_theme_canary_demo_importer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/demo-importer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_theme_canary_demo_importer() {

	$plugin = new Theme_Canary_Demo_Import();
	$plugin->run();

}
run_theme_canary_demo_importer();
