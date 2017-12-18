<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZmartOffcial
 */

?>



<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <title>
            <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description'): wp_title(); ?>
    </title>


    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">


    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>




	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="media-checker"></div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <nav id="header">
        <div class="mobile-navigation visible-xs">
            <div class="logo-container"><?php the_custom_logo(); ?></div>
            <div class="navigation-trigger" id="trigger">
                <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
            </div>

        </div>
        <div class="mobile-links-list-container">
            <?php wp_nav_menu(
                array(
                    'menu'           => 'primary',
                    'theme_location' => 'primary'
                )
            ); ?>
        </div>

        <!-- Desktop Pattern for Header -->
        <div class="desktop-navigation">

            <div class="container-logo">
                <a href="index.html"><?php the_custom_logo(); ?></a>
                <div id="zmart"><?php bloginfo('name'); ?></div>
            </div>

            <div class="desktop-link-list-container">
                <?php wp_nav_menu(
                    array(
                        'menu'           => 'primary',
                        'theme_location' => 'primary'
                    )
                ); ?>
            </div>

        </div>
        <!-- End of Desktop Pattern-->

    </nav>
    <div class="pusher visible-xs"></div>
    <header class="hidden-xs">

    </header>

