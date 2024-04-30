<?php
/*
Plugin Name: My Leads Plugin
Plugin URI: http://localhost/pluginassess/wordpress/
Description: A plugin to capture and manage leads.
Version: 1.0
Author: Kris Ann
Author URI: http://pluginassess.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: myleadsplugin
Domain Path: /languages
*/

function myleadsplugin_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('My Leads Plugin activated successfully!', 'myleadsplugin'); ?></p>
    </div>
    <?php
}

add_action('admin_notices', 'myleadsplugin_admin_notice');
?>
