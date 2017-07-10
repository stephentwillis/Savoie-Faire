<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
	    <meta name="author" content="">

        <title><?php if (is_front_page()) { echo 'Welcome'; } else { wp_title('', true, 'right'); } ?> | <?php bloginfo('name'); ?></title>
        
        <!-- Favicons -->
	    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png">
	    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon-114x114.png">

        <!-- Fonts -->
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>


        <!-- Bootstrap core CSS -->
	    <link href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	    <!-- Icon Fonts -->
	    <link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	    <link href="<?php bloginfo('template_url'); ?>/assets/css/et-line-font.min.css" rel="stylesheet">
	
	    <!-- Plugins -->
	    <link href="<?php bloginfo('template_url'); ?>/assets/css/magnific-popup.css" rel="stylesheet">
	    <link href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.css" rel="stylesheet">
	    <link href="<?php bloginfo('template_url'); ?>/assets/css/superslides.css" rel="stylesheet">
	    <link href="<?php bloginfo('template_url'); ?>/assets/css/vertical.min.css" rel="stylesheet">
	
	    <!-- Template core CSS -->
	    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">   

        <?php wp_head(); ?>
    </head>
	<body>
        <!-- PRELOADER -->
	    <div class="page-loader">
		    <div class="loader">Loading...</div>
	    </div>
	    <!-- /PRELOADER -->