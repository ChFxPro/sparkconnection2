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

    <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'helene-clean' ); ?>">
        <details class="mobile-menu">
            <summary class="menu-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'helene-clean' ); ?>">
                <span class="hamburger" aria-hidden="true"></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'helene-clean' ); ?></span>
            </summary>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                )
            );
            ?>
        </details>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->