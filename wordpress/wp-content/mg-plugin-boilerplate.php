<?php
/**
 * The plugin bootstrap file.
 *
 * @link              myleadsplugIn
 * @since             1.0.0
 * @package           Mg_Boilerplate_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       myleadsplugin
 * Plugin URI:        http://localhost/pluginassess/wordpress/
 * Description:       A brief description of your plugin.
 * Version:           1.0.0
 * Author:            Your Name
 * Author URI:        https://example.com
 * License:           GPL2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 */

defined('ABSPATH') || die('Direct script access denied.');

/**
 * Activation Hook.
 */
function mg_boilerplate_plugin_activate() {
    require_once plugin_dir_path(__FILE__) . 'includes/mg-plugin-boilerplate-activator.php';
    Mg_Boilerplate_Plugin_Activator::activate();
}
register_activation_hook(__FILE__, 'mg_boilerplate_plugin_activate');

/**
 * Deactivation Hook.
 */
function mg_boilerplate_plugin_deactivate() {
    require_once plugin_dir_path(__FILE__) . 'includes/mg-plugin-boilerplate-deactivator.php';
    Mg_Boilerplate_Plugin_Deactivator::deactivate();
}
register_deactivation_hook(__FILE__, 'mg_boilerplate_plugin_deactivate');

// Handles the admin functionality.
require_once plugin_dir_path(__FILE__) . 'includes/mg-plugin-boilerplate-admin.php';

// Handles form submissions.
require_once plugin_dir_path(__FILE__) . 'includes/mg-plugin-boilerplate-form-handler.php';
