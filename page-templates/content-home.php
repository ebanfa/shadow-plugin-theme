<?php
/**
 * Template Name: Content Home Page
 *
 */
get_header();
?>
<!-- slider -->
<div id="cameraSliderWrapper" class="clearfix">
    <div class="camera_wrap camera_black_skin">
        <div data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/camera/camera-slide4.jpg" data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/camera/camera-slide4.jpg">
            <div class="camera_caption fadeFromLeft">
                <h1>Maximize Profitability On Your Real Estate Portfolio</h1>
                <h2>Financial, operational and business intelligence capabilities to keep you ahead.</h2>
                <p> Includes functionality to manage property accounting, investment and development management, tenant and lease information, and building maintenance.</p>
                <a href="<?php echo get_site_url(); ?>" title="order now" class="btn btn-sm btn-primary" target="_blank">Get Started</a> 
            </div>
        </div>
        <div data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/camera/camera-slide2.jpg" data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/camera/camera-slide2.jpg">
            <div class="camera_caption fadeFromLeft">
                <h1>Professional Property Management At Your Finger Tips</h1>
                <h2>Convenient, secure and easy to use software that conforms to your organization’s roles and processes.</h2>
                <p>We are committed to being your first choice for financial services by providing responsive solutions and competitively priced products that are delivered with exceptional service.</p>
                <a href="<?php echo get_site_url(); ?>" title="order now" class="btn btn-sm btn-primary" target="_blank">Get Started</a> 
            </div>
        </div>
        
        <!-- slider -->
    </div>
</div>
    <!-- slider -->

<div id="stats" class="card m-b-0">
    <div class="card-body card-padding">
        <div class="mini-charts">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="mini-charts-item bgm-cyan m-b-0">
                        <div class="clearfix">
                            <div class="chart stats-bar"><canvas height="45" width="83" style="display: inline-block; width: 83px; height: 45px; vertical-align: top;"></canvas></div>
                            <div class="count">
                                <small>Easy of use</small>
                                <h2>100%</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="mini-charts-item bgm-lightgreen m-b-0">
                        <div class="clearfix">
                            <div class="chart stats-bar-2"><canvas height="45" width="83" style="display: inline-block; width: 83px; height: 45px; vertical-align: top;"></canvas></div>
                            <div class="count">
                                <small>Availability</small>
                                <h2>100%</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="mini-charts-item bgm-orange m-b-0">
                        <div class="clearfix">
                            <div class="chart stats-line"><canvas height="45" width="85" style="display: inline-block; width: 85px; height: 45px; vertical-align: top;"></canvas></div>
                            <div class="count">
                                <small>Average turnaround</small>
                                <h2>99.7%</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="mini-charts-item bgm-bluegray m-b-0">
                        <div class="clearfix">
                            <div class="chart stats-line-2"><canvas height="45" width="85" style="display: inline-block; width: 85px; height: 45px; vertical-align: top;"></canvas></div>
                            <div class="count">
                                <small>Support</small>
                                <h2>24/7</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="contact" class="card go-social m-b-0">
    <div class="card-header bgm-cyan">
        <h2>Social with us <small>Give us a like on your favorite social media network</small></h2>
    </div>

    <div class="card-body clearfix p-t-15">
        <a class="col-xs-2" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portal/social/facebook-128.png" class="img-responsive" alt="">
        </a>

        <a class="col-xs-2" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portal/social/twitter-128.png" class="img-responsive" alt="">
        </a>

        <a class="col-xs-2" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portal/social/googleplus-128.png" class="img-responsive" alt="">
        </a>

        <a class="col-xs-2" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portal/social/linkedin-128.png" class="img-responsive" alt="">
        </a>

        <a class="col-xs-2" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portal/social/youtube-128.png" class="img-responsive" alt="">
        </a>

        <a class="col-xs-2" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portal/social/blogger-128.png" class="img-responsive" alt="">
        </a>
    </div>
</div>
<div id="about" class="card m-b-0">
    <div class="card-header bgm-lightblue">
        <h2>About Us <small>Who we are and what we do...</small></h2>
    </div>

    <div class="card-body card-padding">
        Shadow Banker is an online peer to peer lending service that was founded with the goal of a providing secure and cost effective way to access financing without the hassles associated with working with traditional brick and motar banks
    </div>
</div>


<?php get_footer(); ?>