<?php
/**
* Template Name: Home
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

		
		
<div class="row">
<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="col-md-4">
<?php the_post_thumbnail(); ?>
<div class="post-title">
<h2><?php the_title(); ?></h2>
</div>
<div class="post-text">
<?php the_excerpt(__('(more…)')); ?>
<a href="<?php the_permalink() ?>">CZYTAJ WIĘCEJ</a>
</div>
</div>
<?php 
endwhile;
wp_reset_postdata();
?>

		</div>
		
		
		
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
