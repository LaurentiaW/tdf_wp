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
            </section>
                
                <div class="wrapper">
                    <h2 class="about">The Digital Factory's core capabilities are:</h2>
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
                <section class="packages">
                        <h3>How The Digital Work</h3>
                        <p>To make it easier for clients to know what to expect The Digital Factory Web design and Development Packages</p>
                        
                        <ol>
                            <li class="packages-headings">Wordpress Packages
                                <ul>
                                    <li>Wordpress Packages - CMS (Content Management System)
                                        <ul>
                                            <li>Basic WordPress website with client provided design
                                            25 hrs implement &amp; test custom WordPress theme using placeholder content</li>
                                            <li>5 hrs to import content & test</li>
                                            <li>10 hrs to work with client & any revisions</li>
                                            <li>Total 40 hrs of work <strong>&euro;2000</strong> </li>
                                        </ul>
                                    </li>
                                    <li>A basic WordPress without a design
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
                            <li>Development Packages
                                <ul>
                                    <li>Develop website from design composition (Homepage/Front-page, About, Work, Blog &amp; Contact page)</li>
                                    <li>Mobile/responsive (based on design provided)</li> 
                                    <li>Optimizing images Development 20 hrs, Production 5 hrs, Revisions 2 hrs Total 25 hrs <strong>&euro;1250</strong></li>
                                </ul>
                            </li>
                            <li>Web layout design composition Package
                                <ul>
                                    <li>Create a website layout design composition based on storyboards, user journeys, and wireframing </li>
                                    <li>Deliverables include homepage/front-page, about, work, blog, and contact (or comparable to client’s needs) in mobile, tablet and desktop</li>        
                                    <li>Meetings and brainstorming 5 hrs, Design Production 5 hrs, Design 20 hrs, Design Revision 10 hrs Total hrs 40 hrs <strong>&euro;2000</strong></li>
                                </ul>        
                            </li>
                        </ol>
                    </section>


        


            
        <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
           



<?php get_footer(); ?>