<?php

/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till end of nav
 *
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */
?>



<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
         <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
          <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
            <![endif]-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Exo:300,400,400i,700" rel="stylesheet">


        <meta name="description" content="Puzzle solving web developer that designs layout for your website/app, code static pages and created wordpress themes for all your needs">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <!-- Importing Google Fonts -->
        
        

        


    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="main-header group">
          <h1 id="logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sq.png" alt="The Digital Factory Logo" id="sq" /></a><!--this is for desktop-->
                <a href="<?php echo home_url(); ?>""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-rec.png"" alt="The Digital Factory Logo" id="rec" /></a><!--this is for mobile-->
            </h1>
            <nav class="group">
                <ul class="primary">
                     <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'primary' ) ); ?>
                </ul>
            </nav>
        </header>

                                