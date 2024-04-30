<?php

/**
 * Adds a menu item for the plugin to the WordPress admin menu and handles the display of the leads page.
 */
function mg_boilerplate_plugin_add_admin_menu() {
    add_menu_page(
        __('Leads', 'mg-boilerplate-plugin'),  // Page title
        __('Leads', 'mg-boilerplate-plugin'),  // Menu title
        'manage_options',                      // Capability
        'mg-boilerplate-plugin',               // Menu slug
        'mg_boilerplate_plugin_display_leads', // Function that displays the page content
        'dashicons-admin-generic'              // Icon URL
    );
}

add_action('admin_menu', 'mg_boilerplate_plugin_add_admin_menu');

/**
 * Displays the Leads admin page for the plugin, fetching data from the database and displaying.
 */
function mg_boilerplate_plugin_display_leads() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'leads';
    $leads = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

    echo '<div class="wrap"><h2>' . __('Leads', 'mg-boilerplate-plugin') . '</h2>';
    if (!empty($leads)) {
        echo '<table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Service Required</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($leads as $lead) {
            echo '<tr>' .
                '<td>' . esc_html($lead->name) . '</td>' .
                '<td>' . esc_html($lead->email) . '</td>' .
                '<td>' . esc_html($lead->phone) . '</td>' .
                '<td>' . esc_html($lead->service_required) . '</td>' .
                '</tr>';
        }

        echo '</tbody></table>';
    } else {
        echo '<p>No leads found.</p>';
    }
    echo '</div>';
}

