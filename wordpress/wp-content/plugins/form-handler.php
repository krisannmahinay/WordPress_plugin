<?php
// This code handles form submissions for My Plugin.
function my_plugin_handle_form_submission() {
    // Check if our specific submit button's post data is set
    if (isset($_POST['submit_lead_form'])) {
        global $wpdb;  // Globalize the wpdb class to interact with the database
        $table_name = $wpdb->prefix . 'leads';  // Determine the table name

        // Sanitize each form input
        $name = sanitize_text_field($_POST['lead_name']);
        $email = sanitize_email($_POST['lead_email']);
        $phone = sanitize_text_field($_POST['lead_phone']);
        $service = sanitize_text_field($_POST['service_required']);

        // Insert the data into the database
        $wpdb->insert($plugin, [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'service_required' => $service
        ]);

        // Output a simple confirmation message
        echo '<p>Thank you for your submission.</p>';
    }
}
// Hook the above function to WordPress 'wp' action
add_action('wp', 'my_plugin_handle_form_submission');
