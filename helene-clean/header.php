<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Helene-Clean
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'helene-clean' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
                       <?php
                       $logo_markup = '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . esc_url( get_template_directory_uri() . '/imgs/SparkPointLogoMain.png' ) . '" class="site-logo" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" /></a>';
                       if ( is_front_page() && is_home() ) :
                               ?>
                               <h1 class="site-title"><?php echo $logo_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
                               <?php
                       else :
                               ?>
                               <p class="site-title"><?php echo $logo_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                               <?php
                       endif;
			$helene_clean_description = get_bloginfo( 'description', 'display' );
			if ( $helene_clean_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $helene_clean_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

               <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'helene-clean' ); ?>">
                        <button id="nav-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'helene-clean' ); ?>">
                                <span class="hamburger" aria-hidden="true"></span>
                                <span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'helene-clean' ); ?></span>
                        </button>
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
