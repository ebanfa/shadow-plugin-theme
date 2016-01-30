<?php
    if(is_front_page()) {
        get_template_part('home-header'); 
    }
    else {
        get_template_part('portal-header');
    }
?>