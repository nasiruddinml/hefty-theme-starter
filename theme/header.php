<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hefty_Starter_Theme_for_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	<a href="#primary"><?php esc_html_e( 'Skip to content', 'hefty-starter-theme' ); ?></a>

	<header id="masthead">
		<div>
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$hefty_starter_theme_description = get_bloginfo( 'description', 'display' );
			if ( $hefty_starter_theme_description || is_customize_preview() ) :
				?>
				<p><?php echo $hefty_starter_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation">
			<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hefty-starter-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
