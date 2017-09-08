<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */
?>


		<footer class="group">
            <div class="footer-wrap">
                <p id="copyright">&copy;The Digital Factory</p>
                <p id="footer"> Design | Developement | WordPress</p>
            </div>
        </footer>
  

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

       
        <?php wp_footer(); ?>
    </body>
</html>