<?php
/**
 * The template for displaying the 404 page
 *
 * 
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */

get_header(); ?>

   

        <div class="wrapper">
            <section class="hero-area">
                <h1><span>O</span>h n<span>o</span> y<span>o</span>u br<span>o</span>ke the <span>i</span>nternet!</h1>
                <figure class="what" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/what.png" alt="Did you just break the internet? No, just kidding! This is our work in progress page." class="shake-slow">
                </figure>
                <h1>Ah just k<span>i</span>dd<span>i</span>ng</h1>
            </section>
        </div>
            <section class="just-for-fun">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dog.jpg" alt="fun image dog wearing sunglasses - just for fun!" class="funimg" id="dog">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gorilla.jpg" alt ="fun image of gorilla typing on a laptop - just for fun!" class="funimg" id="gorilla">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/penguin.jpg" alt="fun image penguin made from scrap material - just for fun!" class="funimg" id="penguin">
            </section>
            <div class="clearfix"></div>

            <div class="inprogress">
                <h3>Well this is not what you are looking for!!</h3>
                <p> The page you are looking for has either moved, is no longer or has never existed. <br>
                You can find more info on <a href="<?php echo home_url(); ?>/about">The Digital Factory</a>, its main capabilities and <a href="<?php echo home_url(); ?>/work">past projects</a>. Want to know more, send me an <a href="mailto:hello@thedigitalfactory.nl"> email</a>.  Perhaps next time you stop by you will find what you were looking for. In the meanwhile enjoy the funny image included founded on <a href="http://www.gratisography.com/" target="_blank">gratisography</a></p>
            </div>


<?php get_footer(); ?>
