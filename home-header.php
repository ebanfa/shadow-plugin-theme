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
        <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/css/camera.css' type='text/css' media='all'>  
        <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/style.css' type='text/css' media='all'>
        <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/camera.min.js'></script> 
        <script>
		jQuery(function(){
			
			if($('.camera_wrap').length){

		    	jQuery('.camera_wrap').camera({
		    		thumbnails: false,
		    		pagination: false,
		    		height:'39%',
		    		fx:'simpleFade'
		    	});

		    }

		});
	</script>
    </head>

    
    <?php                            
        $login_nav_text = 'Sign In';                            
        $login_nav_link = get_site_url() . '/signin';
        if (is_user_logged_in()) {
            $login_nav_link = wp_logout_url(home_url());
            $login_nav_text = 'Sign Out';
        } 
    ?>

    <body>

        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
                <li class="logo hidden-xs">
                    <a href="<?php echo get_site_url(); ?>"><strong><?php bloginfo('name'); ?></strong></a>
                </li>

                <li class="pull-right">
                    <ul class="home-header-menu header-inner p-0">
                        <li class="logo hidden-xs"><a href="index.html">Home</a></li>
                        <li class="logo hidden-xs"><a href="<?php echo get_site_url(); ?>#about">About</a></li>
                        <?php if (is_user_logged_in()) { ?>
                            <li class="logo hidden-xs"><a href="<?php echo get_site_url(); ?>/page/?type=page&artifact=dashboard">Dashboard</a></li>
                        <?php } else {?>
                        <li class="logo hidden-xs"><a href="<?php echo $login_nav_link; ?>">Get Started</a></li>
                        <?php } ?>
                        <li class="logo hidden-xs"><a href="<?php echo get_site_url(); ?>#contact">Contact Us</a></li>
                        <li class="logo hidden-xs">
                            <a href="<?php echo $login_nav_link; ?>"><?php echo $login_nav_text; ?></a>
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
            <aside id="sidebar">
                <div class="sidebar-inner">
                    <div class="si-inner">
                        
                        <ul class="main-menu">
                            <li class="active"><a href="<?php echo get_site_url(); ?>"><i class="md md-home"></i> Home</a></li>
                            <li><a href="<?php echo get_site_url(); ?>#about"><i class="md md-person"></i> About</a></li>
                            <?php if (is_user_logged_in()) { ?>
                                <li><a href="<?php echo get_site_url(); ?>/page/?type=page&artifact=dashboard"><i class="md md-layers"></i> Dashboard</a></li>
                            <?php } else {?>
                                <li><a href="<?php echo $login_nav_link; ?>"><i class="md md-layers"></i> Get Started</a></li>
                            <?php } ?>
                            <li><a href="<?php echo get_site_url(); ?>"><i class="md md-quick-contacts-dialer"></i> Contact Us</a></li>
                            <li><a href="<?php echo $login_nav_link; ?>"><i class="md md-input"></i> <?php echo $login_nav_text; ?></a></li>
                        </ul>
                    </div>
                </div>
            </aside>








