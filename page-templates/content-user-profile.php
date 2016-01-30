<?php
/**
 * Template Name: Content User Profile Page
 *
 */
?>
<?php

function do_page_head() {
    echo '<script src="' . get_bloginfo('template_directory') . '/js/content-order/content-order-datatables.js"></script>';
    echo '<script src="' . get_bloginfo('template_directory') . '/js/content-user/content-user-datatables.js"></script>';
}

// Add the action
add_action('wp_head', 'do_page_head');
get_header();
?>

<?php
if (!is_user_logged_in()) {
    wp_redirect(get_site_url() . '/signin/');
    exit;
}

$current_user = wp_get_current_user();
// User profile data
$is_admin = true;
$email = $current_user->user_login;
$user_name = $current_user->user_login;
$display_name = get_user_meta($current_user->ID, 'display_name', true);
$registration_date = $current_user->user_registered;

$user_stats = get_user_stats($user_name);
$user_monthly_data = get_user_monthly_data($user_name);
?>
<section id="content">
    <div class="container">
        <!-- Tabs -->
        <div class="card">
            <div class="card-header bgm-lightgreen">
                <h2>My account <small>View your orders, activities etc</small></h2>
            </div>

            <div class="card-body">
                <ul class="tab-nav tn-justified tn-icon" role="tablist">
                    <li role="presentation" class="active">
                        <a class="col-sx-4" href="#orders-tab" aria-controls="orders-tab" role="tab" data-toggle="tab">
                            <i class="md md-home icon-tab"></i>
                        </a>
                    </li>
                    <?php if (current_user_can('administrator')) { ?>
                        <li role="presentation">
                            <a class="col-xs-4" href="#clients-tab" aria-controls="clients-tab" role="tab" data-toggle="tab">
                                <i class="md md-room icon-tab"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="col-xs-4" href="#writers-tab" aria-controls="writers-tab" role="tab" data-toggle="tab">
                                <i class="md md-star icon-tab"></i>
                            </a>
                        </li>
                    <?php } ?>
                </ul>

                <div class="tab-content p-20">
                    <!-- Orders tab-->
                    <div role="tabpanel" class="tab-pane animated fadeIn in active" id="orders-tab">
                        <div class="table-responsive">
                            <table id="client-orders-table" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Topic</th>
                                        <th>Pages</th>
                                        <th>Cost</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <!-- End table-responsive -->
                        </div>
                    </div>

                    <?php if (current_user_can('administrator')) { ?>
                    <!-- Clients tab-->
                    <div role="tabpanel" class="tab-pane animated fadeIn in" id="clients-tab">
                        <div class="table-responsive">
                            <table id="content-users-table" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Username</th>
                                        <th>Registered</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <!-- End table-responsive -->
                        </div>
                    </div>
                    <!-- Writers tab-->
                    <div role="tabpanel" class="tab-pane animated fadeIn in" id="writers-tab">
                        <div class="table-responsive">
                            <table id="content-creators-table" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Username</th>
                                        <th>Registered</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <!-- End table-responsive -->
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>


    </div>
</section>
<?php get_footer(); ?>
 