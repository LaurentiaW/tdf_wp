<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */


        get_header(); ?>

            <div class="wrapper">
                <?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
                	<div class="hero-area">
                    <h1><?php the_title(); ?></h1>
                  </div>
            </div>
            <div class="content group">
                <figure class="post-thumbnail">
                     <?php the_post_thumbnail(); ?>
                </figure>
               
                <p><?php the_content(); ?></p>
            
                <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
            </div>
         
        <?php get_footer(); ?>
        


     