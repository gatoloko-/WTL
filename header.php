<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package world transport intl
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if(is_home()){ echo "MM_preloadImages('wp-content/themes/world-transport-intl/img/icons/plane_on.png'".
														",'wp-content/themes/world-transport-intl/img/icons/ship_on.png'".
														",'wp-content/themes/world-transport-intl/img/icons/truck_on.png'".
														
														",'wp-content/themes/world-transport-intl/img/icons/courier_on.png'".
														",'wp-content/themes/world-transport-intl/img/icons/mudanza_on.png'".
														",'wp-content/themes/world-transport-intl/img/icons/consolidado_on.png'".
														
														",'wp-content/themes/world-transport-intl/img/icons/wine_on.png'".
														",'wp-content/themes/world-transport-intl/img/club_on.png'".
														",'wp-content/themes/world-transport-intl/img/outsourcing_on.png'".
														")";
								} ?> >
	
<div class="background-slide">
<?php echo do_shortcode("[metaslider id=15]"); ?>	
</div>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'world-transport-intl' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" class="logo"/>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'world-transport-intl' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
