<?php
/* Template Name: Content User Sign Up Page */
?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!-- Include this so that wordpress will load our enqueued scripts -->
    <?php wp_head(); ?>

</head>

<body <?php body_class('login-content'); ?>>
    <!-- Login -->
    <div class="lc-block toggled" id="l-register">
        <form id="signup-form" class="form-signup" method="POST"
              data-bv-framework="bootstrap"
              data-bv-message="This value is not valid"
              data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
              data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
              data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

            <div class="form-group input-group m-b-20">
                <span class="input-group-addon"><i class="md md-person"></i></span>
                <div class="fg-line">
                    <input name="first_name" id="first_name" type="text" 
                           value="" class="form-control" 
                           placeholder="First name"
                           data-bv-message="The first name is not valid" 
                           data-bv-emailaddress-message="The input is not a valid name" required/>
                </div>
            </div>

            <div class="form-group input-group m-b-20">
                <span class="input-group-addon"><i class="md md-person"></i></span>
                <div class="fg-line">
                    <input name="last_name" id="last_name" type="text" 
                           value="" class="form-control" 
                           placeholder="Last name"
                           data-bv-message="The last name is not valid" 
                           data-bv-emailaddress-message="The input is not a valid name" required/>
                </div>
            </div>

            <div class="form-group input-group m-b-20">
                <span class="input-group-addon"><i class="md md-person"></i></span>
                <div class="fg-line">
                    <input name="email" id="email" type="text" 
                           value="" class="form-control" 
                           placeholder="Email address"
                           data-bv-message="The email is not valid" 
                           data-bv-emailaddress-message="The input is not a valid email address" required/>
                </div>
            </div>

            <div class="form-group input-group m-b-20">
                <span class="input-group-addon"><i class="md md-lock-outline"></i></span>
                <div class="fg-line">
                    <input name="password" id="password" type="password" value="" 
                           class="form-control" 
                           placeholder="Password" 
                           data-bv-notempty="true"
                           data-bv-notempty-message="The password is required and cannot be empty"
                           data-bv-identical="true"
                           data-bv-identical-field="confirm_password"
                           data-bv-identical-message="The password and its confirm are not the same"/>
                </div>
            </div>
            <div class="form-group input-group m-b-20">
                <span class="input-group-addon"><i class="md md-lock-outline"></i></span>
                <div class="fg-line">
                    <input name="confirm_password" id="confirm_password" type="password" value="" 
                           class="form-control" 
                           placeholder="Confirm password"
                           data-bv-notempty="true"
                           data-bv-notempty-message="The confirm password is required and cannot be empty"
                           data-bv-identical="true"
                           data-bv-identical-field="password"
                           data-bv-identical-message="The password and its confirm are not the same"/>
                </div>
            </div>

            <div class="clearfix"></div>
            <!--  <div class="form-group col-xs-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="user_class" value="client"  
                               data-bv-notempty="true"
                               data-bv-notempty-message="Please indicate your preferrences">
                        <i class="input-helper"></i>
                        I am an individual
                    </label>
                </div>
            </div>

            <div class="form-group col-xs-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="user_class" value="writer"  
                               data-bv-notempty="true"
                               data-bv-notempty-message="Please indicate your preferrences">
                        <i class="input-helper"></i>
                        I am an organization
                    </label>
                </div>
            </div> -->
            <?php wp_nonce_field('signup_form_submitted', 'signup_form_nonce_field'); ?>
            <input type="hidden" name="signup_form_submitted" id="submitted" value="true" />

            <button class="btn btn-login btn-danger btn-float">
                <i class="md md-arrow-forward"></i>
            </button>
        </form>
        <div id="success"></div>

        <ul class="login-navigation">
            <li data-block="#l-register" class="bgm-red"><a href="<?php echo get_site_url(); ?>/signin">Signin</a></li>
            <li data-block="#l-forget-password" class="bgm-orange"><a href="<?php echo get_site_url(); ?>/forgot-password">Forgot Password?</a></li>
        </ul>
    </div>

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1 class="c-white">IE SUCKS!</h1>
            <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="img/browsers/chrome.png" alt="">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="img/browsers/firefox.png" alt="">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="img/browsers/opera.png" alt="">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="img/browsers/safari.png" alt="">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="img/browsers/ie.png" alt="">
                        <div>IE (New)</div>
                    </a>
                </li>
            </ul>
            <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
        </div>   
    <![endif]-->
</body>
</html>
