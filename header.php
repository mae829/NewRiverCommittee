<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Design and layout by Miguel Estrada-->
        <!--Coded by Miguel Estrada-->
        
    	<!--META DATA-->
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="author" content="Miguel Estrada, Bleu Mikey, MikeE" />
        <meta name="robots" content="all" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
        <!--META DATA SPECIFIC TO SITE--> 
        <meta name="copyright" content="Copyright 2010" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="keywords" content="Calexico New River Committee, new river, calexico" />

        <!--TITLE OF SITE-->
        <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>
        
        <!--FAVICON-->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        
        <!--[if IE]>
        	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
        <![endif]-->

        <!--SCRIPTS CODE-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/init.js"></script>
        
        <!--[if IE]>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie.js"></script>
        <![endif]-->
        <!--[if lt IE 7]>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/unitpngfix.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        
    </head>
    <!--[if lt IE 7 ]> <body class="ie6"<?php body_control(); ?>> <![endif]-->
    <!--[if IE 7 ]>    <body class="ie7"<?php body_control(); ?>> <![endif]-->
    <!--[if IE 8 ]>    <body class="ie8"<?php body_control(); ?>> <![endif]-->
    <!--[if IE 9 ]>    <body class="ie9"<?php body_control(); ?>> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
	<body<?php body_control(); ?>>
    <!--<![endif]-->
    	<div id="wrapper" class="container_16">
        
        	<header>
                    <?php get_search_form(); ?>
				<div id="contact-info">
                    <p>
                    	P.O. Box 2374<br/>
                        Calexico, CA 92231<br/>
                        (760) 357-8389<br/>
                        Fax: (760) 357-8779<br/>
                        E-mail: <a href="mailto:info@calexiconewriver.com">info@calexiconewriver.com</a>
					</p>
                </div><!--END CONTACT-INFO-->
                
            	<h1><a href="<?php bloginfo('url'); ?>">Calexico New River Committee</a></h1>
                <p><?php bloginfo('description');?></p>
                <!-- Navigation Menu -->
                <nav>
                        <ul>
<?php wp_list_pages('include=7,9,12,14&title_li='); ?>
                        </ul>
                </nav>
			</header>
            <div id="content">