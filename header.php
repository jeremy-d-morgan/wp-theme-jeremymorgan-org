<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-theme-jeremymorgan.org
 */


$template_uri = get_template_directory_uri();

$description = get_bloginfo( 'description', 'display' );

$branding = '
	<div class="greeting">
		<div class="avatar">
			<a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . $template_uri . '/img/avatar.png" height="64" width="64" alt="8-bit styled avatar of a bearded man with glasses." /></a>
		</div>
		<div class="text">
			<span class="line line-1">My name is </span>
			<span class="line line-2"><h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>.</span></h1>
			<span class="line line-3">I\'m a programmer.</span>
		</div>
	</div>
';

$primary_menu = '
	<div class="menu">
		<button class="menu-toggle hamburger" aria-controls="primary-menu" aria-expanded="false">' . esc_html__( 'Primary Menu', 'wp-theme-jeremymorgan-org' ) . '</button>
		' . wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'echo' => false ) ) . '
	</div>
';

$branding_html = jm_eight_bit_frame( $branding, 'jm-branding', false );

$primary_menu_html = jm_eight_bit_frame( $primary_menu, 'jm-primary-menu', false );


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-theme-jeremymorgan-org' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<div id="jm-branding">
					<?php echo $branding_html; ?>
				</div>

				<div id="jm-primary-menu">
					<?php echo $primary_menu_html; ?>
				</div>

			</nav><!-- #site-navigation -->

			<?php
			/*
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php
				endif;
			*/
			?>

		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
