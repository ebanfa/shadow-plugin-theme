<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage HiveMaster
 * @since HiveMaster 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog_info">												
        <div class="blog_info_block">
	            <?php
			// Page thumbnail and title.
					the_title( '<h4 class="post-title">', '</h4>' );
				?>
        </div>
        <div class="portfolio_share">
            <a href="#" class="ico_socialize_facebook2 ico_socialize type2"></a>
            <a href="#" class="ico_socialize_twitter2 ico_socialize type2"></a>
            <a href="#" class="ico_socialize_pinterest ico_socialize type2"></a>
            <a href="#" class="ico_socialize_google2 ico_socialize type2"></a>                                                    
            <div class="clear"><!-- ClearFix --></div>
        </div>
    </div>

	<article class="contentarea">
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

		?>
	</article><!-- .entry-content -->
	<hr>
</article><!-- #post-## -->
