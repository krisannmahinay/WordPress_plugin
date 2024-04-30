// Function to display the form with a WordPress nonce field
function myleadsplugin_form_shortcode() {
    $form_html = '<form action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">
        <p>Your Name (required) <br/>
        <input type="text" name="myleads-name" pattern="[a-zA-Z0-9 ]+" value="' . (isset($_POST["myleads-name"]) ? esc_attr($_POST["myleads-name"]) : '') . '" size="40" required></p>
        <p>Your Email (required) <br/>
        <input type="email" name="myleads-email" value="' . (isset($_POST["myleads-email"]) ? esc_attr($_POST["myleads-email"]) : '') . '" size="40" required></p>
        <p>Subject (required) <br/>
        <input type="text" name="myleads-subject" pattern="[a-zA-Z ]+" value="' . (isset($_POST["myleads-subject"]) ? esc_attr($_POST["myleads-subject"]) : '') . '" size="40" required></p>
        <p>Your Message (required) <br/>
        <textarea rows="10" cols="35" name="myleads-message" required>' . (isset($_POST["myleads-message"]) ? esc_attr($_POST["myleads-message"]) : '') . '</textarea></p>
        ' . wp_nonce_field('myleads_form_nonce_action', 'myleads_form_nonce_field') . '
        <p><input type="submit" name="myleads-submitted" value="Send"></p>
    </form>';
    return $form_html;
}
add_shortcode('myleads_form', 'myleadsplugin_form_shortcode');

// Function to handle form submission
function myleadsplugin_handle_form_submission() {
    if (isset($_POST['myleads-submitted']) && isset($_POST['myleads_form_nonce_field']) && wp_verify_nonce($_POST['myleads_form_nonce_field'], 'myleads_form_nonce_action')) {
        global $wpdb;

        // Sanitize form values
        $name    = sanitize_text_field($_POST['myleads-name']);
        $email   = sanitize_email($_POST['myleads-email']);
        $subject = sanitize_text_field($_POST['myleads-subject']);
        $message = sanitize_textarea_field($_POST['myleads-message']);

        // Insert into database
        $table_name = $wpdb->prefix . 'myleads';
        $wpdb->insert($table_name, [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ]);

        // Redirect or show a success message
        wp_redirect(home_url('/thank-you')); // Redirect to a thank-you page
        exit;
    }
}
add_action('wp', 'myleadsplugin_handle_form_submission');
