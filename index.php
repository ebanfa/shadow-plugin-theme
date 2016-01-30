<?php // the index template file - the default template file WordPress uses to display content    ?>

<?php get_header(); ?>


<div class="padding-md">
    <div class="row">
        <div class="col-md-11">	
            <h3 class="headline m-top-md">
                Welcome To Our Blog
                <span class="line"></span>
            </h3>
            <div class="row">	
                <div class="col-md-12">
                    <?php // start the loop ?> 
                    <?php while (have_posts()) : the_post(); ?>

                        <div id="post-<?php the_ID(); ?>" class="panel blog-container">
                            <div class="panel-body">
                                <h4>
                                    <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'compass'), the_title_attribute('echo=0')); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <small class="text-muted">By <a href="blog.html#"><strong><?php the_author(); ?></strong></a> |  <?php the_date(); ?> </small>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i> Continue reading</a>
                                <span class="post-like text-muted tooltip-test" data-toggle="tooltip" data-original-title="I like this post!">
                                    <i class="fa fa-heart"></i> <span class="like-count">8</span>
                                </span>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php // ends the loop  ?> 
                    <!-- PAGINATION - START -->
                    <ul class="pagination">
                        <li><?php previous_posts_link( 'Newer posts' ); ?></li>
                        <li><?php next_posts_link( 'Older posts' ); ?></li>
                    </ul>            
                    <!-- PAGINATION - END -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.padding-md -->





<div id="content" class="two-thirds">



</div><!-- #content-->

<?php get_footer(); ?>