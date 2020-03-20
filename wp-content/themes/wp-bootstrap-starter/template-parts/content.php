<?php
	/**
		* Template part for displaying posts
		*
		* @link https://codex.wordpress.org/Template_Hierarchy
		*
		* @package WP_Bootstrap_Starter
	*/
?>

	<?php 
		$post_id = get_the_ID();
		$ip_adress = $_SERVER['REMOTE_ADDR'];
		$check = apply_filters('check',$post_id, $ip_adress);

	  if (isset($_POST['wynik']) && $check==false) {
			do_action('voted',$post_id, $ip_adress);
			$count = (int) get_field('wynik' . '_' . $_POST['wynik']);
			$count++;
			
			update_field('wynik' . '_' . $_POST['wynik'], $count);
	  }
	?>	
	
	<?php
	
	$table_name = $wpdb->prefix . 'ankieta';
    $wpdb_collate = $wpdb->collate;
    $sql =
         "CREATE TABLE IF NOT EXISTS {$table_name} (
         id int auto_increment ,
         ip_adress varchar(16),
		 post_id int,
		 date datetime default CURRENT_TIMESTAMP,
		 PRIMARY KEY  (id)
         )
		 COLLATE {$wpdb_collate}";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql , true );
	?>
	
	
	<?php



	?>
	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="post-thumbnail">
		<?php // the_post_thumbnail(); ?>
	</div>
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<header class="entry-header">
		<?php
			
			
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta data-posta">
			<?php wp_bootstrap_starter_posted_on(); ?>
			
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
		
		<?php
			if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			
		?>
		
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			if ( is_single() ) :
			the_content();
			else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
			endif;
			
			wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
			'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<div id="autorzy">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-2">
				
				<div class="entry-author">
					<div class="entry-author-image">
						<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 'thumbnail'); ?>
						
						
					</div>
				</div>
				
			</div >
			
		 	<div class="col-sm-10">
				<div class="entry-author-text">
					<span> Autorem tekstu jest: </br></span>
					<span><?php  wp_bootstrap_starter_posted_by(); ?></span>
					
					<br>
					
					<span><span class="entry-bold">Kategorie:</span> 	<?php wp_bootstrap_starter_entry_footer(); ?></span>
				</div>
				
				
			</div>
			
		</div>
		
		
	</div>
	</div>
	
	
	
	
	<?php
		$check = apply_filters('check',$post_id, $ip_adress);
	?>
	
	
	
	
	<?php if ( do_shortcode('[acf field="tytul"]') !== "")  { ?>
	<div class="ankieta">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>	<?php echo do_shortcode('[acf field="tytul"]'); ?>   </p>
				</div>
			</div>
				<div class="row">
				<div class="col-md-10 offset-md-1">
			<div class="inner-ankieta align-items-stretch">
				<div class="row">
					<div class="col-md-6">
						<img src="	<?php echo do_shortcode('[acf field="zdjecie"]'); ?> ">
					</div>

					<div class="col-md-6">
						<form method="post">
						<input type="hidden" name="wynik" value="1">
						<div class="lubieto_button">
							<?php 
							if ($check==false)
								echo "<button><img src='/wp-content/uploads/img/button.png'></button>";
							?>
						</div>
						</form>
						<div class="lubieto_text">
							<?php 
							if ($check==false)
								echo do_shortcode('[acf field="opis"]');
							else
							{
								echo "WYNIK: ";
								echo do_shortcode('[acf field="wynik_1"]');
							}								
							?>
						</div>
						


					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	
<?php if ( do_shortcode('[acf field="tytul_2"]') !== "")  { ?>
	<div class="ankieta">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>	<?php echo do_shortcode('[acf field="tytul_2"]'); ?>   </p>
				</div>
			</div>
				<div class="row">
				<div class="col-md-10 offset-md-1">
			<div class="inner-ankieta align-items-stretch">
				<div class="row">
					<div class="col-md-6">
						<img src="	<?php echo do_shortcode('[acf field="zdjecie_2"]'); ?> ">
					</div>

				<div class="col-md-6">
						<form method="post">
						<input type="hidden" name="wynik" value="2">
						<div class="lubieto_button">
							<?php 
							if ($check==false)
								echo "<button><img src='/wp-content/uploads/img/button.png'></button>";
							?>
						</div>
						</form>
						<div class="lubieto_text">
							<?php 
							if ($check==false)
								echo do_shortcode('[acf field="opis_2"]');
							else
							{
								echo "WYNIK: ";
								echo do_shortcode('[acf field="wynik_2"]');
							}								
							?>
						</div>
						


					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php }	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php if ( do_shortcode('[acf field="tytul_3"]') !== "")  { ?>
	<div class="ankieta">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>	<?php echo do_shortcode('[acf field="tytul_3"]'); ?>   </p>
				</div>
			</div>
				<div class="row">
				<div class="col-md-10 offset-md-1">
			<div class="inner-ankieta align-items-stretch">
				<div class="row">
					<div class="col-md-6">
						<img src="	<?php echo do_shortcode('[acf field="zdjecie_3"]'); ?> ">
					</div>

						<div class="col-md-6">
						<form method="post">
						<input type="hidden" name="wynik" value="3">
						<div class="lubieto_button">
							<?php 
							if ($check==false)
								echo "<button><img src='/wp-content/uploads/img/button.png'></button>";
							?>
						</div>
						</form>
						<div class="lubieto_text">
							<?php 
							if ($check==false)
								echo do_shortcode('[acf field="opis_3"]');
							else
							{
								echo "WYNIK: ";
								echo do_shortcode('[acf field="wynik_3"]');
							}								
							?>
						</div>
						


					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php }	?>

	
	
	
<script>
let myArray = [];
let post_id  = '<?php echo get_the_ID(); ?>';
myArray.push( post_id );
</script>

	
</article><!-- #post-## -->
