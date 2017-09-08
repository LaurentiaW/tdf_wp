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

			<div class="container">
				<div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>Our awards</h1>
                        </div>
                    </div>
                </div>
				<table class="case-studies">
                    <tr>
                        <th>Award</th>
                        <th>Awarded by</th>
                        <th>Category</th>
                        <th>Date</th>
                    </tr>
                    <?php while ( have_posts() ) : the_post();
                    $awarded_by = get_field ( 'awarded_by');
                    $category = get_field ( 'category' );
                    $certificate = get_field ( 'certificate');
                    $date = get_field ( 'date');
             ?>
                    <tr>
                        <td><a href="<?php the_permalink (); ?>"><?php the_title(); ?></a></td>
                        <td><a href="<?php the_permalink (); ?>"><?php echo $awarded_by; ?></a></td>
                        <td><a href="<?php the_permalink (); ?>"><?php echo $category; ?></a></td>
                        <td><a href="<?php the_permalink (); ?>"><?php echo $date; ?></a></td>
                    </tr>   
                    <?php endwhile; // end of the loop. ?>              
                </table>

            
            </div>
            
            

            <div class="ws-50">
                
            </div>

<?php get_footer(); ?>