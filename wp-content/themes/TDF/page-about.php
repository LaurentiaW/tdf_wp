<?php 
/**
 * The is the template page for the about page 
 *
 *
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
                <section class="hero-area">
                    <h1>The D<span>i</span>g<span>i</span>tal Fact<span>o</span>ry <span>i</span>s all ab<span>o</span>ut...</h1>
                
                </section>
                             
            </div>
            <section class="about">
                <figure>
                    
                </figure>
                <article>
                    <p><?php the_content();?></p>
                </article>
            </section>
                
                <div class="wrapper">
                    <h2 class="about">The Digital Factory's core capabilities are:</h3>
                    <section class="capabilities group">
                            <?php query_posts('posts_per_page=3&post_type=skills'); ?>
                                <?php while ( have_posts() ) : the_post(); 
                                    $img = get_field ( 'img');
                                    $size = "medium";
                                    ?>
                                    <div class="skill group">
                                        <figure class=cap-img>
                                            <a href="<?php the_permalink (); ?>">
                                                <?php  if($img ) { 
                                                    echo wp_get_attachment_image ($img, $size);
                                                } ?>  
                                            </a>
                                        </figure>
                                        <a href="<?php the_permalink (); ?>">
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                    </div>

                                <?php endwhile; ?> 
                            <?php wp_reset_query(); ?>
                    </section>
                </div>            
            
        <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
           



<?php get_footer(); ?>