<?php

/*
 * Enqueue scripts for the front pages
 * */

function enqueue_child_frontpage_scripts() {
    enqueue_child_portal_scripts();
}

/*
 * Enqueue scripts for the login pages
 * */

function enqueue_child_loginpages_scripts() {
    enqueue_child_portal_scripts();
}

/*
 * Enqueue scripts for the portal pages
 * */

function enqueue_child_portal_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://code.jquery.com/jquery-2.1.1.min.js', false, '2.1.1');

    wp_register_script('flot_js', get_stylesheet_directory_uri() . '/vendors/flot/jquery.flot.min.js', array('jquery'), true);
    wp_register_script('flot_resize_js', get_stylesheet_directory_uri() . '/vendors/flot/jquery.flot.resize.min.js', array('jquery'), true);
    wp_register_script('curvedLines_js', get_stylesheet_directory_uri() . '/vendors/flot/plugins/curvedLines.js', array('jquery'), true);
    wp_register_script('sparkline_js', get_stylesheet_directory_uri() . '/vendors/sparklines/jquery.sparkline.min.js', array('jquery'), true);
    wp_register_script('easypiechart_js', get_stylesheet_directory_uri() . '/vendors/easypiechart/jquery.easypiechart.min.js', array('jquery'), true);

    wp_register_script('moment_js', get_stylesheet_directory_uri() . '/vendors/fullcalendar/lib/moment.min.js', array('jquery'), true);
    wp_register_script('fullcalendar_js', get_stylesheet_directory_uri() . '/vendors/fullcalendar/fullcalendar.min.js', array('jquery'), true);
    wp_register_script('simpleWeather_js', get_stylesheet_directory_uri() . '/vendors/simpleWeather/jquery.simpleWeather.min.js', array('jquery'), true);
    wp_register_script('autosize_js', get_stylesheet_directory_uri() . '/vendors/auto-size/jquery.autosize.min.js', array('jquery'), true);
    wp_register_script('nicescroll_js', get_stylesheet_directory_uri() . '/vendors/nicescroll/jquery.nicescroll.min.js', array('jquery'), true);
    wp_register_script('waves_js', get_stylesheet_directory_uri() . '/vendors/waves/waves.min.js', array('jquery'), true);
    wp_register_script('bootstrap_growl_js', get_stylesheet_directory_uri() . '/vendors/bootstrap-growl/bootstrap-growl.min.js', array('jquery'), true);
    wp_register_script('sweet_alert_js', get_stylesheet_directory_uri() . '/vendors/sweet-alert/sweet-alert.min.js', array('jquery'), true);

    wp_register_script('fileinput_js', get_stylesheet_directory_uri() . '/vendors/fileinput/fileinput.min.js', array('jquery'), true);
    
    wp_register_script('curved_line_chart_js', get_stylesheet_directory_uri() . '/js/portal/flot-charts/curved-line-chart.js', array('jquery'), true);
    wp_register_script('line_chart_js', get_stylesheet_directory_uri() . '/js/portal/flot-charts/line-chart.js', array('jquery'), true);
    wp_register_script('charts_js', get_stylesheet_directory_uri() . '/js/portal/charts.js', array('jquery'), true);
    //wp_register_script('backstretch_js', get_stylesheet_directory_uri() . '/js/jquery.backstretch.min.js', array('jquery'), true);

    // wp_register_script('charts_js', get_stylesheet_directory_uri() . '/js/portal/charts.js', array('jquery'), true);
    wp_register_script('functions_js', get_stylesheet_directory_uri() . '/js/portal/functions.js', array('jquery'), true);

    // Enqueue our scripts
    wp_enqueue_script('flot_js');
    wp_enqueue_script('flot_resize_js');
    wp_enqueue_script('curvedLines_js');
    wp_enqueue_script('sparkline_js');
    wp_enqueue_script('easypiechart_js');
    wp_enqueue_script('moment_js');
    wp_enqueue_script('fullcalendar_js');
    wp_enqueue_script('simpleWeather_js');
    wp_enqueue_script('autosize_js');
    wp_enqueue_script('nicescroll_js');
    wp_enqueue_script('waves_js');
    wp_enqueue_script('bootstrap_growl_js');
    wp_enqueue_script('sweet_alert_js');
    wp_enqueue_script('fileinput_js');
    wp_enqueue_script('curved_line_chart_js');
    wp_enqueue_script('line_chart_js');
    wp_enqueue_script('functions_js');
}

?>