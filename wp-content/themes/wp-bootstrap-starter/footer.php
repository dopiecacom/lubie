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
	
	
	
	<div id="footer-upper-section">
	
	
	
	
	<div class="container">
	<div class="posts">
	
	<h1>Te artykuły mogą być dla Ciebie</h1>
	

	
	
	
	
<?php
   if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
$args = array(
    'post_type'=>'post', // Your post type name
    'posts_per_page' => 3,
	'cat' => 0,
    'paged' => $paged,
);

$loop = new WP_Query( $args );
            // Pagination fix
            $temp_query = $wp_query;
            $wp_query   = NULL;
            $wp_query   = $loop;
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>

	
	
	
	
			<?php 	if ($licznik%3==0){ ?>
		<div class="row">
			<?php } ?>
			<div class="col-md-4">
				<h3><?php the_category();?></h3>
				<?php the_post_thumbnail(); ?>
				<div class="post-title">
				<h2><?php the_title();?></h2>
				</div>
				<div class="post-text">
				<?php the_excerpt(__('(more…)')); ?>
				<span id="czytaj-wiecej"><a href="<?php the_permalink() ?>">CZYTAJ WIĘCEJ</a></span>
				</div>
			</div>
			<?php 
			if ($licznik%3==2){ ?>
		 </div>
		<?php } ?>
		<?php $licznik++; ?>
	
	
	
	
	
	
	
	
	
    <?php
    endwhile;

    $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));
?><div id="pagination"><?php
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%/#footer-upper-section',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« poprzednia strona'),
            'next_text'    => __('następna strona »'),
        ));
		?></div><?php
    }    
}

	//if (  $wp_query->max_num_pages > 1 )
	//echo '<div class="misha_loadmore">WIĘCEJ</div>'; 



//global $wp_query;
 

wp_reset_postdata();
            // Reset main query object
            $wp_query = NULL;
            $wp_query = $temp_query;
?>

	
	
	
	</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		


		
		
		
		<div class="container">
		<div class="row">
		<div class="col-md-12">	
		
		<div id="instagram">
		<p>INSTAGRAM</p>
		<?php echo do_shortcode('[instagram-feed user="lubietocompl"]'); ?>
		
		</div>
		</div>
		</div>
		</div>
		
	
	</div>
	
	
	
	
	
	<div id="footer-lower-section">
	
	
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
		
	</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>