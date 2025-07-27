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
<header id="masthead" class="site-header">
	<div class="site-branding">
    <a href="https://www.yoursparkpoint.org/" target="_blank" rel="noopener">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/SparkPointLogoMain.png" alt="SparkPoint Logo">
    </a>
</div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" aria-label="Primary Menu">
                <button id="nav-toggle" class="menu-toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="hamburger" aria-hidden="true"></span>
                        <span class="screen-reader-text">Primary Menu</span>
                </button>

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'menu-1',
				'menu_id'         => 'primary-menu',
				'container_class' => 'menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->