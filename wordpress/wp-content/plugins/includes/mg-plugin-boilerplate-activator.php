<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    MG_Boilerplate_Plugin
 * @subpackage MG_Boilerplate_Plugin/includes
 * @author     Your Name <email@example.com>
 */
class Mg_Boilerplate_Plugin_Activator {

    public static function activate() {
        global $wpdb;  // Globalize $wpdb object to interact with the database
        $table_name = $wpdb->prefix . 'leads';  // Prefixing the table name with wp_ or custom prefix
        $charset_collate = $wpdb->get_charset_collate();  // Ensuring to use the correct charset

        // SQL statement to create the table
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            email varchar(320) NOT NULL,
            phone varchar(20) NOT NULL,
            service_required varchar(50) NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');  // Including the upgrade.php script
        dbDelta($sql);  // Using dbDelta to execute the SQL and create the table
    }
}

// Register the activation hook outside of the class
register_activation_hook(__FILE__, array('Mg_Boilerplate_Plugin_Activator', 'activate'));
