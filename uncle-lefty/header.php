<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Uncle Lefty
 */
?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

 
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/lefty-bg-font.css" type="text/css" media="all" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/lefty.css" type="text/css" media="all" />
<link rel="stylesheet"  href="http://localhost:8888/unclelefty/xcss/leftyX.css" type="text/css" media="all" /> 
<script>
var $j = jQuery.noConflict();


$j(document).ready(function() {
 $j("#wrap").fadeIn(200);



$j(".menu-toggle").click(function () {
   $j(".mobile-menu").slideDown(200);
});


$j(".close").click(function () {
   $j(".mobile-menu").slideUp(200);
});

$j(window).on('resize', function() {
    if ($j(window).width() > 700) {
        $j('.mobile-menu').hide();

    }
});

});
</script>

</head>

<body <?php body_class(); ?>>


<?php if(is_front_page() ) { ?>
<img class="homer" src="<?php echo get_template_directory_uri(); ?>/img/ul-mobile.jpg">

<?php } ?>



<div id="page" class="hfeed site">

	<div id="wrap" style="display:none;">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'uncle-lefty' ); ?></h1>
			<div class="mobile-menu">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						<a class="close">Close</a>
			</div>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'uncle-lefty' ); ?>"><?php _e( 'Skip to content', 'uncle-lefty' ); ?></a></div>
			<div class="regs-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
		
		<?php
/* if ( is_page( array( 'roster', 'east-coast', 'west-coast' ) )  ) {
?><nav id="regions-navigation"><?php wp_nav_menu( array( 'theme_location' => 'regions' ) ); ?></nav><?php


} elseif ( 'member' == get_post_type() ) {
?><nav id="regions-navigation"><?php wp_nav_menu( array( 'theme_location' => 'regions' ) ); ?></nav><?php

} else {
} */
?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
