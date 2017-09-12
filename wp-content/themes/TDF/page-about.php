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
                 <article class="group">
                    <figure class="profile-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-img.jpg" alt="fun profile img" />
                    </figure>
                    <p><?php the_content();?></p>
                </article>
                <hr>
            </section>
                
                <div class="content">
                    <h2 class="about">The Digital Factory's core capabilities are:</h2>
                    <section class="about group">
                            <?php query_posts('posts_per_page=3&post_type=skills'); ?>
                                <?php while ( have_posts() ) : the_post(); 
                                    $icon = get_field ( 'icon');
                                    $size = "medium";
                                    ?>
                                    <div class="cap-about group">
                                        <figure class=about-img>
                                            <a href="<?php the_permalink (); ?>">
                                                <?php  if($icon ) { 
                                                    echo wp_get_attachment_image ($icon, $size);
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
                     <hr>
                </div>
                <section class="packages">
                        <h3>The Digital Factory Packages</h3>
                        <p>Need a new website or transform your current website into a content management system. Listed below is The Digital Factory's packages. This should give you an indication of the prices and time frame required to produce and deliver your project. Please note these are all indications time frames cost vary from project to project depending on your project's requirements. </p>
                        
                        <ol>
                            <li><h5>Wordpress Packages</h5>
                                <ul>
                                    <li><h6>Wordpress Packages - CMS (Content Management System)</h6>
                                        <ul>
                                            <li>Basic WordPress website with client provided design
                                            25 hrs implement &amp; test custom WordPress theme using placeholder content</li>
                                            <li>5 hrs to import content & test</li>
                                            <li>10 hrs to work with client & any revisions</li>
                                            <li>Total 40 hrs of work <strong>&euro;2000</strong> </li>
                                        </ul>
                                    </li>
                                    <li><h6>A basic WordPress without a design</h6>
                                        <ul>
                                            <li>30 hrs to design the site (frontpage/homepage, about, work, blog,contact)</li>
                                            <li>10 hrs for design revisions</li>
                                            <li>27 hrs to code custom theme</li>
                                            <li>5 hrs to import content &amp; test</li>
                                            <li>10 hrs to work with client &amp; more revisions</li>
                                            <li>Total 65 hrs to work <strong>&euro;3250</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><h5>Development Package</h5>
                                <ul>
                                    <li>Develop website from design composition (Homepage/Front-page, About, Work, Blog &amp; Contact page)</li>
                                    <li>Mobile/responsive (based on design provided)</li> 
                                    <li>Optimizing images Development 20 hrs, Production 5 hrs, Revisions 2 hrs Total 25 hrs <strong>&euro;1250</strong></li>
                                </ul>
                            </li>
                            <li><h5>Web layout design composition Package</h5>
                                <ul>
                                    <li>Create a website layout design composition based on storyboards, user journeys, and wireframing </li>
                                    <li>Deliverables include homepage/front-page, about, work, blog, and contact (or comparable to client’s needs) in mobile, tablet and desktop</li>        
                                    <li>Meetings and brainstorming 5 hrs, Design Production 5 hrs, Design 20 hrs, Design Revision 10 hrs Total hrs 40 hrs <strong>&euro;2000</strong></li>
                                </ul>        
                            </li>
                        </ol>
                    </section>
                    <section class="cta">
                        <hr>
                        <h3>Curious about how The Digital Factory can assist you on your next web project? Complete the quote form for a proposal.</h3>   
                        <a href="<?php echo home_url(); ?>/quote" class="btn">Give me a proposal!</a>
                    </section>
                    

        


            
        <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
           



<?php get_footer(); ?>