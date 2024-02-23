<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home"><?php bloginfo( 'name' ); ?></a>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav><!--#site-navigation -->

        <section class="">
            <div class="">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/orchid.png' ?>" class="orchid_burger" alt="Fleur d'orchidée tournant sur elle-même">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/Sunflower.png'?>" class="sunflower_burger" alt="Fleur de tournesol tournant sur elle-même">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/flower.png'?>" class="flower_burger" alt="Fleur tournant sur elle-même">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/random_flower.png'?>" class="random_flower_burger" alt="Fleur aléatoire tournant sur elle-même">
                
                <ul class="nav_menu">
                    <li><a href="#story" class="nav_link">Histoire</a></li>
                    <li><a href="#characters" class="nav_link">Personnages</a></li>
                    <li><a href="#place" class="nav_link">Lieu</a></li>
                    <li><a href="#studio" class="nav_link">Studio Koukaki</a></li>
                </ul>
                <p class="text_menu">STUDIO KOUKAKI</p>
            </div>
        </section>
            
	</header><!-- #masthead -->
