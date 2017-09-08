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

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>

        <meta name="description" content="Puzzle solving web developer that designs layout for your website/app, code static pages and created wordpress themes for all your needs">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <!-- Importing Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <link href="https://fonts.googleapis.com/css?family=Exo:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="main-header group">
          <h1 id="logo">
                <a href="index.html"><img src="img/logo-sq.png" alt="The Digital Factory" id="sq" /></a><!--this is for desktop-->
                <a href="index.html"><img src="img/logo-rec.png" alt="The Digital Factory" id="rec" /></a><!--this is for mobile-->
            </h1>
            <nav class="group">
                <ul>
                    <li><a href="work/index.html"> work</a></li>
                    <li><a href="progress/index.html"> about</a></li> <!--this is a link to work in progress page -->
                    <li><a href="progress/index.html"> contact</a></li> <!--this is a link to work in progress page -->
                </ul>
            </nav>
        </header>