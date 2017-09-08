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
                <div class="skill group">
                        <figure class=cap-img>
                           <a href="<?php echo home_url(); ?>/about">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/development.jpg" alt="Web development is one of The Digital Factory's core capabilities">
                            </a>
                        </figure>
                        
                        <a href="<?php echo home_url(); ?>/about"><h3 id=development>Development</h3></a>
                    </div>

                    <div  class="skill group">
                        <figure class=cap-img>
                           <a href="<?php echo home_url(); ?>/about">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design.jpg" alt="Visual Design is one of The Digital Factory's core capabilities">
                            </a>
                        </figure>
                        
                        <a href="<?php echo home_url(); ?>/about"><h3 id=design>Design</h3></a>
                    </div>

                    <div class="skill group">
                       
                         <figure class=cap-img>
                           <a href="<?php echo home_url(); ?>/about">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cms.jpg" alt="Content Management is one of The Digital Factory's core capabilities">
                            </a>
                        </figure>
                        
                        <a href="<?php echo home_url(); ?>/about"><h3 id=marketing>WordPress</h3></a>
                    </div>
                </section> <!--end capabiliites section-->
        </div> <!--close wrapper for blue-grey background -->


            <section class="credentials">
                <div class="projects">
                    <h6>Want a <span> peak</span> of our capabilities - have a look at some of our <a href="<?php echo home_url(); ?>/work">past projects</a> </h6>

                    <div class="featured-projects">

                        <div class="group">
                            <div class="portfolio">
                                <figure class="portfolio-img">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tdf.png" alt="">
                                </figure>
                            </div> <!--1st project -->

                            <div class="portfolio">
                                <figure class="portfolio-img">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tdf.png" alt="">
                                </figure> 
                            </div><!--2nd project -->

                            <div class="portfolio">
                                <figure class="portfolio-img">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tdf.png" alt="">
                                </figure>
                            </div><!--3rd project -->

                            <div class="portfolio">
                                <figure class="portfolio-img">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tdf.png" alt="">
                                </figure> 
                            </div><!--4th project -->
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
                        <h3>tdf's latest project</h3>
                        <h6><span>Project type:</span><br> Design/Development/CMS</h6>
                        <h6><span>Project Description</span></h6>
                        <p>Text descriping the project</p>
                    </div>
                    <div class="highlighted-project-img">
                        <figure>
                            <a href="<?php echo home_url(); ?>/work">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tdf.png">
                            </a>
                        </figure>
                    </div>
                </article>
            </div>
            
            <div class="clearfix"></div>

<?php get_footer(); ?>