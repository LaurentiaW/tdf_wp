<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */
     get_header(); ?>    

      <div class="wrapper">
            
        
            <section class="hero-area">
                <h1>Creat<span>i</span>ng d<span>i</span>g<span>i</span>tal mag<span>i</span>c thr<span>o</span>ugh hard w<span>o</span>rk and creat<span>i</span>v<span>i</span>ty</h1>
            
            </section>

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
                        
                        <a href="<?php the_permalink (); ?>"><h3><?php the_title(); ?></h3></a>
                        
                    </div>

                    <?php endwhile; ?> 
                    <?php wp_reset_query(); ?>
                    
                </section> <!--end capabiliites section-->
        </div> <!--close wrapper for blue-grey background -->


            <section class="credentials">
                <div class="projects">
                    <h6>Want a <a href="<?php echo home_url(); ?>/work"><span> peak</span></a> of our capabilities - have a look at some of our <a href="<?php echo home_url(); ?>/work">past projects</a> </h6>
                    <?php query_posts('posts_per_page=4&post_type=projects'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $img = get_field('img');
                            $size = "medium";
                            ?>
                    <div class="featured-projects">

                        <div class="group">
                            <div class="portfolio">
                                <figure class="portfolio-img">
                                    <a href="<?php the_permalink (); ?>">
                                      <?php  if($img ) { 
                                        echo wp_get_attachment_image ($img, $size);
                                        } ?>   
                                    </a>
                                </figure>
                            </div> <!--1st project -->

                            
                    <?php endwhile; ?> 
                    <?php wp_reset_query(); ?>
                        </div>

                        <p class="view">click <a href="<?php echo home_url(); ?>/work">here</a> to view more....</p>
                    </div>
                </div><!--end of projects/credentials-->
            </section>
            <div class="fp-wrap">
                <section class="intro">
                    <p><span>The Digital Factory:</span> A creative and practical approach to meet your digital wishes. Provide digital consulting services from digital marketing to visual design requirements and the web development skills needed to deliver your website.</p>
                    <a href="<?php echo home_url(); ?>/contact" class="btn">Let's talk!</a>
                </section>
                <article class="highlighted-project">
                    <div class="highlighted-project-text">
                        <?php query_posts('posts_per_page=1&post_type=projects'); ?>
                        <?php while ( have_posts() ) : the_post(); 
                            $project_scope = get_field ( 'project_scope');
                            $img = get_field('img');
                            $size = "medium";
                            ?>
                        <h3>tdf's latest project</h3>
                        <h6><span>Project type:</span><br> <?php echo $project_scope; ?></h6>
                        <h6><span>Project Description</span></h6>
                        <p><?php echo get_excerpt(); ?></p>
                    </div>
                    <div class="highlighted-project-img">
                        <figure>
                            <a href="<?php the_permalink (); ?>">
                                <?php  if($img ) { 
                                        echo wp_get_attachment_image ($img, $size);
                                } ?>  
                            </a>
                        </figure>
                    </div>
                </article>
            </div>
        <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
    <div class="clearfix"></div>

<?php get_footer(); ?>