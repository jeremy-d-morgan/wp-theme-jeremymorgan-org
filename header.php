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

			<div class="eight-bit-frame">
				<div class="eight-bit-frame-row eight-bit-frame-row-top">
					<div class="eight-bit-frame-border eight-bit-frame-border-top-left"></div>
					<div class="eight-bit-frame-border eight-bit-frame-border-top"></div>
					<div class="eight-bit-frame-border eight-bit-frame-border-top-right"></div>
				</div>
				<div class="eight-bit-frame-row eight-bit-frame-row-middle">
					<div class="eight-bit-frame-border eight-bit-frame-border-left"></div>
					<div class="eight-bit-frame-content">
						<nav id="site-navigation" class="main-navigation" role="navigation">

							<div class="greeting">
								<div class="avatar">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $template_uri; ?>/img/avatar.png" height="64" width="64" alt="8-bit styled avatar of a bearded man with glasses." /></a>
								</div>
								<div class="text">
									<span class="line-1">Greetings!</span>
									<span class="line-2">My name is <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>.</span></h1>
									<span class="line-3">I'm a programmer.</span>
								</div>
								<div class="menu">
									<button class="menu-toggle hamburger" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wp-theme-jeremymorgan-org' ); ?></button>
									<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
								</div>
							</div>

							<div class="clear"></div>

						</nav><!-- #site-navigation -->
					</div>
					<div class="eight-bit-frame-border eight-bit-frame-border-right"></div>
				</div>
				<div class="eight-bit-frame-row eight-bit-frame-row-bottom">
					<div class="eight-bit-frame-border eight-bit-frame-border-bottom-left"></div>
					<div class="eight-bit-frame-border eight-bit-frame-border-bottom"></div>
					<div class="eight-bit-frame-border eight-bit-frame-border-bottom-right"></div>
				</div>
			</div>

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
