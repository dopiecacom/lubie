<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		
		
		<div class="container">
		<div class="row">
		<div class="col-md-12">
		<div id="kategoria">
		
		
		<h6>WRÓĆ DO STRONY GŁÓWNEJ</h6>
		
		
		
		
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
					<h1><?php the_category();?></h1>
				
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			
		<div class="row">
		<div class="col-md-7">
			<?php the_post_thumbnail(); ?>
		</div>
		
		<div class="col-md-5 kategoria-content">
			<div class="post-title">
			<h2><?php the_title();?></h2>
			</div>
			<div class="post-text">
			<?php the_excerpt(__('(more…)')); ?>
			<a href="<?php the_permalink() ?>">CZYTAJ WIĘCEJ</a>
			</div>
		</div>
		</div>
		
		<?php
			endwhile;
			
			
			
			
			
			
				
//global $wp_query; // you can remove this line if everything works for you
 
// don't display the button if there are not enough posts
	if (  $wp_query->max_num_pages > 1 )
	echo '<div class="misha_loadmore">WIĘCEJ</div>'; // you can use <a> as well

		
			
			
			
			
			
			
			

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		
		
		
		</div>
		</div>
		</div>
		</div>
		
		
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
