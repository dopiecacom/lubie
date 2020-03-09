<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	
	
	<header id="masthead" class="d-flex align-items-stretch bd-highlight <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
      <div class ="menu-full">
	  <div class ="menu-top">
            <nav class="menu-top">

<?php the_widget( 'WP_Widget_Search' ); ?>
<p class ="text-label tematy"> Tematy</p>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => '',
                'menu_id'         => false,
                'menu_class'      => '',
                'depth'           => 3,

                ));
                ?>



            </nav>
			
			<div class="sub-menu">
			<p class ="text-label subskrybuj-tekst"> Subskrybuj</p>
			<div class="subskrybcja">
			<div class="input-group">
				<input class="widget widget_sub form-control" placeholder="T W Ó J  E M A I L"> 
				
				<button><i class="far fa-paper-plane"></i></button>
			</div>
			</div>
			</br>
			<a class="odstep">privacy policy</a><br>
			<a class="odstep">kontakt</a><br>
			<a class="odstep">współpraca</a><br>
			
			
			
			<div class="social-ico">
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-pinterest-p"></i>
			</div>
			
			</div>
			
			
			
			</div>
			
			</div>
			
		<div class ="main-image">
		<div class = "logo-top"><img src="/wp-content/uploads/img/logo_lubie.png">
	</div>

		</div>
		
	</header><!-- #masthead -->
    <!-- <?php /* if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?> -->
        <!-- <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>> -->
            <!-- <div class="container"> -->
                <!-- <h1> -->
                    <!-- <?php -->
                    <!-- if(get_theme_mod( 'header_banner_title_setting' )){ -->
                        <!-- echo get_theme_mod( 'header_banner_title_setting' ); -->
                    <!-- }else{ -->
                        <!-- echo 'WordPress + Bootstrap'; -->
                    <!-- } -->
                    <!-- ?> -->
                <!-- </h1> -->
                <!-- <p> -->
                    <!-- <?php -->
                    <!-- if(get_theme_mod( 'header_banner_tagline_setting' )){ -->
                        <!-- echo get_theme_mod( 'header_banner_tagline_setting' ); -->
                <!-- }else{ -->
                        <!-- echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter'); -->
                    <!-- } -->
                    <!-- ?> -->
                <!-- </p> -->
                <!-- <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- <?php endif; */ ?> -->
	<div id="content" class="site-content">
		<!-- <div class="container"> -->
			<!-- <div class="row"> -->
                <?php endif; ?>