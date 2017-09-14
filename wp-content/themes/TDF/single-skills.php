<?php 
/**
 * The template for skills
 *
 *  @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */


        get_header(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ): the_post(); 

                    $img = get_field ( 'img');
                    $heading_icon1 = get_field ( 'heading_icon1');
                    $icon_img1 = get_field ( 'icon_img1');
                    $descr1 = get_field ( 'descr1');
                    $heading_icon2 = get_field ( 'heading_icon2');
                    $icon_img2 = get_field ( 'icon_img2');
                    $descr2 = get_field ( 'descr2');
                    $heading_icon3 = get_field ( 'heading_icon3');
                    $icon_img3 = get_field ( 'icon_img3');
                    $descr3 = get_field ( 'descr3');
                    $heading_icon4 = get_field ( 'heading_icon4');
                    $icon_img4 = get_field ( 'icon_img4');
                    $descr4 = get_field ( 'descr4');
                    $size = "full"; ?>
        
       
        <ul class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>">home</a></li>
            <li><a href="<?php echo home_url(); ?>/about">about</a></li>
            <li><?php the_title();?></li>
        </ul>


        <div class="wrapper group"> 
                
        
     
            <section class="hero-area">
                <h1><?php the_title();?></h1>
            </section>
        </div>

            <section class="skills-descrip group">
                <article class="description">
                    <h3><?php echo $heading_icon1; ?></h3>
                    <figure class="descr-img">
                        <?php if ($icon_img1) { 
                        echo wp_get_attachment_image( $icon_img1, $size );
                            } ?>
                    </figure>
                    <p><?php echo $descr1?></p>
                </article>
                <article class="description">
                    <h3><?php echo $heading_icon2; ?></h3>
                    <figure class="descr-img">
                        <?php if ($icon_img2) { 
                        echo wp_get_attachment_image( $icon_img2, $size );
                            } ?>
                    </figure>
                    <p><?php echo $descr2?></p>
                </article>
                <article class="description">
                    <h3><?php echo $heading_icon3; ?></h3>
                    <figure class="descr-img">
                        <?php if ($icon_img3) { 
                        echo wp_get_attachment_image( $icon_img3, $size );
                            } ?>
                    </figure>
                    <p><?php echo $descr3?></p>
                </article>
                <article class="description">
                    <h3><?php echo $heading_icon4; ?></h3>
                    <figure class="descr-img">
                        <?php if ($icon_img4) { 
                        echo wp_get_attachment_image( $icon_img4, $size );
                            } ?>
                    </figure>
                    <p><?php echo $descr4?></p>
                </article>
            </section>
                    
            <div class="content">
                <article class="skill-content">

                    <p><?php the_content();?></p>
                </article>
            </div>
                

            <div class="cta">
                <h3>Need assistance with your next <?php echo the_title(); ?> project? </h3>   
                <a href="<?php echo home_url(); ?>/contact" class="btn">Let's talk!</a>
            </div>
     
           <?php endwhile; else: ?>

                <p>Sorry, no page found.</p>

                <?php endif; ?>
        

        <?php get_footer(); ?>
