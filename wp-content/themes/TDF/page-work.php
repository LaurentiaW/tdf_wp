<?php 
/**
 * The is the archive page for projects reflected in the work page
 *
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 *  @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */


        get_header(); ?>

			 <div class="wrapper">
                <section class="hero-area">
                    <h1>Celebrat<span>i</span>ng each m<span>i</span>lest<span>o</span>ne!</h1>
                </section>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
            <section class="pastprojects">
                <p class="intro"><?php the_content();?></p>

                <hr>

                <section class="work-credentials">
                    <?php query_posts('post_type=projects'); ?>
                        <?php while ( have_posts() ) : the_post();
                            $project_scope = get_field ('project_scope'); 
                            $img = get_field ( 'img');
                            $size = "medium";
                            ?>
                
                            <article class="project clearfix">
                                <h2 class="project-name"><a href="<?php the_permalink (); ?>"><?php the_title();?></a></h2>
                                <h5 class="project-type"><a href="<?php the_permalink (); ?>"><?php echo $project_scope; ?></a></h5>
                                <figure class="project-img"><a href="<?php the_permalink (); ?>">
                                         <?php  if($img ) { 
                                            echo wp_get_attachment_image ($img, $size);
                                        } ?>
                                        </a>  
                                </figure>
                                <p class="project-summary"><?php echo get_excerpt(); ?></p>
                            </article>
                        <?php endwhile; ?> 
                    <?php wp_reset_query(); ?>

      
          
        <?php endwhile;?>
        </section>
        <section class="cta">
            <hr>
            <h3>Curious about how The Digital Factory can assist you on your next web project? Complete the quote form for a proposal.</h3>   
            <a href="<?php echo home_url(); ?>/proposal" class="btn">Give me a proposal!</a>
        </section>

                

<?php get_footer(); ?>