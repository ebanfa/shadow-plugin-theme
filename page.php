<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

<?php
// Run the page loop to output the page content.

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section id="content">
        <div class="container">
            <div class="card">
                <div class="card-header bgm-cyan">
                    <h2><?php the_title(); ?><small>Posted by <a class="c-white" href="#"><strong> <?php the_author(); ?></strong></a> |  Posted on <strong><?php the_date(); ?></strong></small></h2>
                </div>

                <div class="card-body card-padding">
                    <?php the_content(); ?> 
                    <br>
                </div>
            </div>

        </div>

    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
