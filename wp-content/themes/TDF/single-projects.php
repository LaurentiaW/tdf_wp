<?php 
/**
 * The template for projects
 *
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */


        get_header(); ?>

            <div class="wrapper group"> 
                <?php if ( have_posts() ) : while ( have_posts() ): the_post(); 

                    $project_scope = get_field ( 'project_scope');
                    $link = get_field('site_link');
                    $img = get_field('img');
                    $img2 = get_field('img2');
                    $img3 = get_field('img3');
                    $size = "full"; ?>

                <section class="hero-area">
                    <h1><?php the_title();?></h1>
                </section>
            </div>

            <section class="pastprojects group">
                <div class="work-credentials">
                <article class="project clearfix">
                    <h5 class="project-type"><span>Project scope:</span> <?php echo $project_scope; ?></h5>
                    <figure class="project-img">
                             <?php if ($img) { 
                        echo wp_get_attachment_image( $img, $size );
                            } ?>
                    </figure>
                    <?php if ($link) { ?>
                    <p><strong><a href="<?php echo $link ; ?>">View Project &gt;</a></strong></p>
                    <?php } ?>
                    <p class="project-summary"><?php the_content();?></p>
                </article>

                </div>
            </section>
            
            <div class="cta">
                <h3>Want to know more about The Digital Factory's past projects, or capabilities? </h3>   
                <a href="<?php echo home_url(); ?>/contact" class="btn">Let's talk!</a>
            </div>
     
           <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
        
        <?php get_footer(); ?>
        