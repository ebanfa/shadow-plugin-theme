<?php

/*
 *
 * */
function do_signin_user($username, $password) {
    $login_data = array();
    $login_data['user_login'] = $username;
    $login_data['user_password'] = $password;

    $user_verify = wp_signon($login_data, true);

    if (is_wp_error($user_verify)) {
        return array('hasErrors' => true,
            'message' => "Invalid username or password. Please try again.");
    } else {
        wp_set_current_user($user_verify->ID);
        wp_set_auth_cookie($user_verify->ID);
        // Build the return
        $content_user = array('user_login' => $username, 'user_password' => $password);
        // Process redirect
        if (isset($_POST['redirect_to'])) {
            $content_user['redirect_url'] = $_POST['redirect_to'];
        } else {
                $content_user['redirect_url'] = site_url() . '/page?type=page&artifact=dashboard';
        }
        return array('hasErrors' => false, 'content_user' => $content_user);
    }
}

/*
 * 
 **/
function do_create_content_user($user_data) {
    $user_id = wp_insert_user($user_data);
    if (is_wp_error($user_id)) {
        return array('hasErrors' => true, 'message' => $user_id->get_error_message());
    }
    update_new_user_meta($user_id, $user_data);;
    $user_data['hasErrors'] = false;
    return $user_data;
}

/*
 * 
 * */
function update_new_user_meta($user_id, $user_data) {
    update_user_meta($user_id, "last_name", $user_data['first_name']);
    update_user_meta($user_id, 'user_email', $user_data['user_email']);
    update_user_meta($user_id, "first_name", $user_data['first_name']);
    update_user_meta($user_id, "display_name", $user_data['display_name']);
    update_user_meta($user_id, 'content_user_type', $user_data['role']);
}

/*
 *
 */
function build_signup_data_from_request() {

    $user_name = sanitize_text_field($_REQUEST['email']);
    $password = sanitize_text_field($_REQUEST['password']);
    $first_name = sanitize_text_field($_REQUEST['first_name']);
    $last_name = sanitize_text_field($_REQUEST['last_name']);
    $user_type = 'INDIVIDUAL';
    // Split the username at the @ sign
    $account_name = $user_name;
    $split_username = explode('@', $account_name);
    if (!empty($split_username)) {
        $account_name = ucfirst($split_username[0]);
    }
    $user_data = array();
    $user_data['user_login'] = $user_name;
    $user_data['user_pass'] = $password;
    $user_data['first_name'] = $first_name;
    $user_data['last_name'] = $last_name;
    $user_data['display_name'] = $account_name;
    $user_data['user_email'] = $user_name;
    $user_data['description'] = '';
    $user_data['role'] = $user_type;
    return $user_data;
}

?>
