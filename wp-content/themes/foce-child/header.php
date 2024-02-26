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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav class="main-navigation">
                <button></button>
                <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                <button id="myButton" class="burger">
                    <span></span>
                </button>
            </nav>
            <div id="menu" class="hidden-menu">
                <div class="fleurs-menu">
                    <img class="orchid" src="<?php echo get_template_directory_uri() . '../assets/images/orchid.png'; ?> " alt="logo" />
                    <img class="kawaneko" src="<?php echo get_template_directory_uri() . '../uploads/2022/06/kawaneko-menu.png'; ?> " alt="logo" />
                    <img class="flower" src="<?php echo get_template_directory_uri() . '../assets/images/flower.png'; ?> " alt="logo" />
                    <img class="orenjiiro" src="<?php echo get_template_directory_uri() . '../uploads/2022/06/orenjiiro-menu.png'; ?> " alt="logo" />
                </div>
                <div class="fleurs-menu">
                    <img class="logo-header" src="<?php echo get_template_directory_uri() . '../assets/images/logo2.png'; ?> " alt="logo" />
                    <a id="clicStory" href="#story">Histoire</a>
                    <a id="clicCharacters" href="#characters">Personnages</a>
                    <a id="clicPlace" href="#place">Lieu</a>
                    <a id="clicStudio" href="#studio">Studio Koukaki</a>
                    <p>STUDIO KOUKAKI</p>
                </div>
                <div class="fleurs-menu">
                    <img class="sunflower" src="<?php echo get_template_directory_uri() . '../assets/images/Sunflower.png'; ?> " alt="logo" />
                    <img class="randomFlower" src="<?php echo get_template_directory_uri() . '../assets/images/random_flower.png'; ?> " alt="logo" />
                    <img class="jaakuna" src="<?php echo get_template_directory_uri() . '../uploads/2022/06/jaakuna-menu.png'; ?> " alt="logo" />
                    <img class="hibiscus" src="<?php echo get_template_directory_uri() . '../assets/images/hibiscus.png'; ?> " alt="logo" />
                </div>
            </div>
            <!-- #site-navigation -->
        </header><!-- #masthead -->