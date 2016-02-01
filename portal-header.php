<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;
            wp_title('|', true, 'right');

            // Add the blog name.
            bloginfo('name');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            ?>
        </title>


        <?php wp_head(); ?>
    </head>

     <?php                            
        $login_nav_text = 'Sign In';                            
        $login_nav_link = get_site_url() . '/signin';
        if (is_user_logged_in()) {
            $login_nav_link = wp_logout_url(home_url());
            $login_nav_text = 'Sign Out';
        } 
    ?>

    <body class="toggled sw-toggled">

        <header id="header">
            <ul class="header-inner">
                <?php
                if (is_user_logged_in()) {
                    ?>
                    <?php
                }
                ?>
                <?php
                /*
                 * Side bar only visible to logged in users
                 */
                if (is_user_logged_in()) { ?>
                    <li id="menu-trigger" data-trigger="#sidebar">
                        <div class="line-wrap">
                            <div class="line top"></div>
                            <div class="line center"></div>
                            <div class="line bottom"></div>
                        </div>
                    </li>
                    <?php
                }
                ?>

                <li class="logo hidden-xs">
                    <a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a>
                </li>

                <li class="pull-right">
                    <ul class="top-menu">
                        <li id="top-search">
                            <a class="tm-message" href="index.html"><i class="md md-search"></i></a>
                        </li>
                        <li class="dropdown">
                            <a class="tm-message" href="<?php echo get_site_url(); ?>/page/?type=entity&page_action=create&artifact=property">
                                <i class="md md-description"></i>
                            </a>
                        </li>
                        <?php do_action('shadowbanker_display_notifications_items');?>
                        <li class="dropdown">
                            <a href="<?php echo $login_nav_link; ?>"><i class="md md-input"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>

        <section id="main">
            <?php do_action('shadowbanker_show_app_menu'); ?>



