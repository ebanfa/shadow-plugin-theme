
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <section id="content">
        <div class="container">
            <div class="card">
                <div class="card-header bgm-cyan">
                    <h2><?php the_title(); ?><small>Posted by <a class="c-white" href="#"><strong> <?php the_author(); ?></strong></a> |  Posted on <strong><?php the_date(); ?></strong></small></h2>
                </div>

                <div class="card-body card-padding">
                    <?php the_content(); ?> 
                    <br>
                    <form method="POST" action="<?php echo get_site_url();?>/order-now">
                        <?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        <input type="hidden" name="question_id" value="<?php echo the_id();?>"/>
                        <button type="submit" class="btn bgm-lightblue waves-effect">
                            <i class="md md-get-app"></i> Order Now
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
