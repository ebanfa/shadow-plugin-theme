<?php

/*
 * Enqueue styles for the front pages
 **/
function enqueue_child_frontpage_styles() {
    enqueue_child_portal_styles();
}

/*
 * Enqueue styles for the login pages
 **/
function enqueue_child_loginpages_styles() {
    enqueue_child_portal_styles();
}

/* Enqueue styles for the portal pages
 * 
 **/
function enqueue_child_portal_styles() {

    //<!-- Vendor CSS -->
    wp_register_style('fullcalendar_css', get_stylesheet_directory_uri() . '/vendors/fullcalendar/fullcalendar.css');
    wp_register_style('animate_css', get_stylesheet_directory_uri() . '/vendors/animate-css/animate.min.css');
    wp_register_style('sweet_alert_css', get_stylesheet_directory_uri() . '/vendors/sweet-alert/sweet-alert.min.css');
    //<!-- CSS -->
    wp_register_style('app_css', get_stylesheet_directory_uri() . '/css/portal/app.min.css');
    wp_enqueue_style('fullcalendar_css');
    wp_enqueue_style('animate_css');
    wp_enqueue_style('sweet_alert_css');
    wp_enqueue_style('app_css');
}

?>