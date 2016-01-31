<?php

require_once (dirname(__FILE__) . '/content-user-service.php');

/*
 *
 * */

function do_signin_user_ajax() {
    if (!isset($_POST['signin_form_submitted']) && !isset($_POST['signin_form_nonce_field']) && !wp_verify_nonce($_POST['signin_form_nonce_field'], 'signin_form_submitted')) {
        wp_send_json_error(array('message' => "Invalid form operation"));
    }
    if (!isset($_REQUEST['username']) || !isset($_REQUEST['password'])) {

        wp_send_json_error(array('message' => "User name and password are required"));
    }
    $username = sanitize_text_field($_REQUEST['username']);
    $password = sanitize_text_field($_REQUEST['password']);
    // Attempt to sign the user in
    $login_results = do_signin_user($username, $password);

    if ($login_results['hasErrors']) {
        wp_send_json_error(array('message' => $login_results['message']));
    }
    $content_user = $login_results['content_user'];
    wp_send_json_success(array('message' => "<script type='text/javascript'>window.location='" . $content_user['redirect_url'] . "'</script>"));
}

add_action('wp_ajax_do_signin_user_ajax', 'do_signin_user_ajax');
add_action('wp_ajax_nopriv_do_signin_user_ajax', 'do_signin_user_ajax');

/*
 *
 **/
function do_signup_user_ajax() {
    if (isset($_POST['signup_form_submitted']) && isset($_POST['signup_form_nonce_field']) && wp_verify_nonce($_POST['signup_form_nonce_field'], 'signup_form_submitted')) {
        //We shall sanitize all inputs  
        $validation_errors = validate_signup_data();
        if (!empty($upload_validation_errors)) {
            wp_send_json_error(array('message' => $validation_errors));
        }
        $user_request_data = build_signup_data_from_request();

        // Create the content user
        $user_data = do_create_content_user($user_request_data);
        if ($user_data['hasErrors']) {
            wp_send_json_error(array('message' => $user_data['message']));
        }
        // Create a shadow banker user
        do_action('cloderia_create_shadow_user', $user_data);

        // Attempt to sigin in the new content user
        $signin_results = do_signin_user($user_data['user_email'], $user_data['user_pass']);
        if ($signin_results['hasErrors']) {
            wp_send_json_error(array('message' => $signin_results['message']));
        }
        $content_user = $signin_results['content_user'];
        wp_send_json_success(array('message' => "<script type='text/javascript'>window.location='" . $content_user['redirect_url'] . "'</script>"));
    }
    else {
        $message = "Invalid form operation.";
        $return = array('message' => $message);
        wp_send_json_error($return);
    }
}
add_action('wp_ajax_do_signup_user_ajax', 'do_signup_user_ajax');
add_action('wp_ajax_nopriv_do_signup_user_ajax', 'do_signup_user_ajax');

/*
 *
 **/
function do_forgot_password_ajax() {

    if (isset($_POST['forgot_password_form_submitted']) && isset($_POST['forgot_password_form_nonce_field']) && wp_verify_nonce($_POST['forgot_password_form_nonce_field'], 'forgot_password_form_submitted')) {
        if (isset($_POST['username'])) {
            $username = sanitize_text_field($_REQUEST['username']);
            $user = get_user_by('login', $username);
            if (!$user) {
                $return = array('message' => "Sorry the username you provided is not registered");
                wp_send_json_error($return);
            } else {
                // Send an email that the account has been created
                do_action('cloderia_user_reset_password', $username);
                $return = array('message' => "A new password has been sent to your email");
                wp_send_json_success($return);
            }
        } else {
            $return = array('message' => "Please provide a valid username");
            wp_send_json_error($return);
        }
    } else {
        $message = "Invalid form operation.";
        $return = array('message' => $message);
        wp_send_json_error($return);
    }
}
add_action('wp_ajax_do_forgot_password_ajax', 'do_forgot_password_ajax');
add_action('wp_ajax_nopriv_do_forgot_password_ajax', 'do_forgot_password_ajax');

function validate_signup_data() {
    $validation_errors = array();

    if (!isset($_REQUEST['email']) || !isset($_REQUEST['password']) || !isset($_REQUEST['confirm_password']) || !isset($_REQUEST['user_class'])) {
        $validation_errors['signup_info_error_msg'] = "Please provide all required information";
        return $validation_errors;
    }

    $user_name = sanitize_text_field($_REQUEST['email']);
    $password = sanitize_text_field($_REQUEST['password']);
    $user_type = sanitize_text_field($_REQUEST['user_class']);
    $confirm_password = sanitize_text_field($_REQUEST['confirm_password']);

    if (($password != $confirm_password) || empty($password) || empty($confirm_password)) {
        $validation_errors['signup_passwd_match_error_msg'] = 'Passwords do not match';
    }
    if (empty($user_name)) {
        $validation_errors['signup_username_error_msg'] = 'Invalid username provided';
    }
    return $validation_errors;
}

?>