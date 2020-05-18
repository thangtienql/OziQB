<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Evolo - StartUp HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/vendor/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/vendor/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/vendor/css/swiper.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri()?>/vendor/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri()?>/style.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/vendor/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top" >
    <div class="wrapper">
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?php is_home() ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'header-menu',
                'depth' => 2,
                'container' => '',
                'container_class' => '',
                'container_id' => '',   
                'menu_class' => 'navbar-nav ml-auto',
                'link_class'   => 'nav-link page-scroll',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker()
            ));
            wp_reset_query();
        ?>
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Request</a>
                </li> -->
                <!-- Dropdown Menu -->          
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li> -->
                <!-- end of dropdown menu -->

                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li> -->
            <!-- </ul> -->
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <!-- Header -->
    <!-- style="background: url('<?php  echo get_template_directory_uri() ?>/vendor/images/header-background.jpg') center center no-repeat;" -->
    <header id="header" class="header" style="background:url('<?php the_field('background_header', 'option'); ?>');">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">StartUp Landing</span> Page Template Free</h1>
                            <p class="p-large">Use Evolo free landing page template to promote your business startup and generate leads for the offered services</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/vendor/images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->