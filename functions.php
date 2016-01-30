<?php
require_once (dirname(__FILE__) . '/includes/content-user/content-signin-ajax.php');
require_once (dirname(__FILE__) . '/includes/enqueue-scripts.php');
require_once (dirname(__FILE__) . '/includes/enqueue-styles.php');
/* Enqueue child theme scripts */
if (!function_exists('blitzdocument_enqueue_scripts')) :
    function blitzdocument_enqueue_scripts() 
    {
        if(is_front_page())
        {
            enqueue_child_frontpage_scripts();
        }
        else if(is_page('signin') || is_page('signup') || is_page('login'))
        {
            enqueue_child_loginpages_scripts();
        }
        else {
            enqueue_child_portal_scripts();
            
        }
    }
    add_action('wp_enqueue_scripts', 'blitzdocument_enqueue_scripts');
endif;

/* Enqueue child theme styles */
if (!function_exists('blitzdocument_enqueue_styles')) :
    // Register our styles
    function blitzdocument_enqueue_styles() 
    {
        if(is_front_page()) {
            enqueue_child_frontpage_styles();
        }
        else if(is_page('signin') || is_page('signup') || is_page('login'))
        {
            enqueue_child_loginpages_styles();
        }
        else {
            enqueue_child_portal_styles();   
        }
    }
    add_action( 'wp_enqueue_scripts', 'blitzdocument_enqueue_styles' ); 
endif;

/*-----------------------------------------------------------------------------------*/
/*  AJAX Actions
/*-----------------------------------------------------------------------------------*/
add_action('template_redirect', 'shadowtemplate_ajax_setup');

function shadowtemplate_ajax_setup() {
    wp_enqueue_script('shadowtemplate_ajax', get_template_directory_uri() .'/js/content-user/content-signin-form.js', array('jquery'), true);
    wp_localize_script('shadowtemplate_ajax', 'shadowtemplate_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}

/*-----------------------------------------------------------------------------------*/
/*  Disable admin bar for all users except adminsitrators
/*-----------------------------------------------------------------------------------*/
add_action('after_setup_theme', 'shadowtemplate_remove_admin_bar');

function shadowtemplate_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

?>