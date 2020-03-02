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
		
		
		
		
		
		
		
		
				
		<div class="container">
		<div class="paragraph">
		<div class="row">
		<div class="col-md-4">	

		<h2>MODA</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin convallis felis nec pellentesque. Nulla ut turpis eros. Maecenas in pretium risus. Vestibulum in pharetra tortor. Vestibulum porttitor consequat metus, in vehicula risus. Maecenas nulla eros, convallis eget sem eu, lacinia auctor mauris. Nunc tincidunt hendrerit velit, ut porta ante fermentum non. Fusce pulvinar sodales faucibus. Morbi euismod nisi nulla, vitae euismod elit laoreet sit amet.</p>
		
		</div>
	
		<div class="col-md-4 offset-md-4">	
		<div class="paragraph-photo">
		<img src="http://lubie.com.pl/wp-content/uploads/2020/02/sample.jpg">
		
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="container">
		<div class="paragraph">
		<div class="row">
		<div id="">
		</div>
		<div class="col-md-6">	
		<div class="paragraph-photo">
		<img src="http://lubie.com.pl/wp-content/uploads/2020/02/sample.jpg" style="width:560px;height:520px;">
		
		</div>
		</div>		
		
		
		<div class="col-md-6">	
		<div class="kafel-jedzenie">
		<h2>JEDZENIE</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin convallis felis nec pellentesque. Nulla ut turpis eros. Maecenas in pretium risus. Vestibulum in pharetra tortor. Vestibulum porttitor consequat metus, in vehicula risus. Maecenas nulla eros, convallis eget sem eu, lacinia auctor mauris.</p>
		</div>
		</div>
	

		
		</div>
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
		
		
		

		
		
		
		


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
