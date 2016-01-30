<?php // the footer template file - contains the footer itself plus the closing body and html tags 

	if(is_front_page()) {
	        get_template_part('home-footer'); 
	    }
	    else {
	        get_template_part('portal-footer');
	    }
	    ?>
       

<?php wp_footer(); ?>
</body>
</html>
