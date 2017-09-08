<?php 
/**
 * The template for skills
 *
 *  @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */


        get_header(); ?>

        <div class="wrapper group"> 
                <?php if ( have_posts() ) : while ( have_posts() ): the_post(); 

                    $img = get_field ( 'img');
                    $size = "full"; ?>
        
     
            <section class="hero-area">
                <h1><?php the_title();?></h1>
            </section>
        </div>

            <section class="indv-skill group">
                <aside class="skill-img">
                        <figure class=cap-img>
                           <?php if ($img) { 
                        echo wp_get_attachment_image( $img, $size );
                            } ?>
                        </figure>
                </aside>
                <article class="skill-content">

                    <p><?php the_content();?></p>
                </article>
            </section>
            <div class="cta">
                <h3>Need assistance with your next <?php echo the_title(); ?> project? </h3>   
                <a href="<?php echo home_url(); ?>/contact" class="btn">Let's talk!</a>
            </div>
     
           <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
        

        <?php get_footer(); ?>
