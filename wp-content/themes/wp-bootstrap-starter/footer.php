<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
			
			<img id="footer-logo" src="/wp-content/uploads/img/logo_lubie.png"/>
			
			
			
                <p><a href="#">REDAKCJA</i></a></p>
                <p><a href="#">KONTAKT</a></p>
                <p><a href="#">WARUNKI PRAWNE</a></p>
                <p>COPYRIGHT</p>
                <p>&copy; <?php echo date('Y'); ?></p>
                <p><a href="http://intle.pl">INTLE</a></p>
				
				
				<div id="footer-social">
				<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
				</div>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>