<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solarized_wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="header">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
            </div><!-- .site-branding -->
            <?php
            get_sidebar();
            ?>
        </header><!-- #masthead -->
        <div id="colophon" class="header-footer">
            <div class="site-info">
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( '%1$s by %2$s', 'solarized-wp' ), '<a target="_blank" href="https://github.com/mmaton/solarized-wp">solarized-wp</a>', '<a href="https://mmaton.com">mmaton</a>' );
                ?>
            </div><!-- .site-info -->
        </div><!-- #colophon -->
    </div><!-- #head -->

	<div id="content" class="site-content">

