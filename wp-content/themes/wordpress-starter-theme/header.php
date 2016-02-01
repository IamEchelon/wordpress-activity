<!DOCTYPE html>
<html>
<head>

	<title><?php bloginfo('name'); ?></title>
	<meta charset="UTF-8">
	<meta name="language" content="english">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="TODO">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/screen.css">
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/stylesheets/print.css">

	<!--[if lt IE 9]>
		<?php /* Support for HTML5 tags on IE 8 and lower */ ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->

	<!-- GOOGLE ANALYTICS -->
	<script>
		var accountID = 'TODO'; // EXAMPLE - UA-7648699-1
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', accountID, 'auto');
		ga('send', 'pageview');

	</script>
	<!-- END GOOGLE ANALYTICS -->

</head>
<body>
<div class="container">
		<header class="site-header">
	            <div class=""><h1><a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a></h1></div>
	            
	
	            <nav class="site-nav">
	
	                <div class=""><?php wp_nav_menu(); ?></div>
	
	            </nav>
        </header>
