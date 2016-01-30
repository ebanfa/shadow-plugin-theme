<div class="spinner_overlay">
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
</div>
<section id="page-header" class="white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <form id="content_search_form" 
                    name="content_search_form" 
                    action="" method="POST" 
                    enctype="multipart/form-data" 
                    data-bv-framework="bootstrap"
                    data-bv-message="This value is not valid"
                    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

                    <input type="text" id="content_search" name="content_search" placeholder="Search papers, questions" class="form-control" 
                    data-bv-message="The query is not valid" required data-bv-notempty-message="The search field cannot be empty">

                </form>
            </div>
            <div id="tools-container" class="col-xs-6">
                <a href="<?php echo get_site_url(); ?>" class="tool-icon btn-primary"><i class="fa fa-home"></i></a>
                <a href="<?php echo get_site_url(); ?>/order-now" class="tool-icon btn-primary"><i class="fa fa-file-text-o"></i></a>
                <a href="#" class="tool-icon btn-info"><i class="fa fa-comments"></i></a>
                 <?php
                    if ( is_user_logged_in() ) 
                    {
                        $user_id = get_current_user_id();
                        $user_type = get_user_meta($user_id, 'content_user_type', true); 

                        if($user_type  == 'client') {
                            $profile_link = 'content-user';
                        }
                        else {
                            $profile_link = 'content-composer';
                        }
                        $profile_link = get_site_url() . '/' . $profile_link;
                ?>
                <a href="<?php echo $profile_link; ?>" class="tool-icon btn-success"><i class="fa fa-user"></i></a>
                <?php  } else { ?>
                    <a href="<?php echo get_site_url(); ?>/signin" class="tool-icon btn-success"><i class="fa fa-user"></i></a>
                <?php  };     ?>
                <!-- <a href="<?php echo get_site_url(); ?>/edit-profile" class="tool-icon btn-warning"><i class="fa fa-gears"></i></a> -->
                
                <?php
                    if ( is_user_logged_in() ) {
                        $login_nav_link = wp_logout_url(home_url());
                        $login_nav_text = 'SIGN OUT';
                    } else {
                        $login_nav_link = get_site_url() . '/signin';
                        $login_nav_text = 'SIGN IN';
                    };
                ?>
                <a href="<?php echo $login_nav_link; ?>" class="tool-icon btn-danger"><i class="fa fa-sign-out"></i></a> 
            </div>
        </div>
    </div>
</section>
