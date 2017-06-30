<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<title><?php the_title(); ?> | Renee Rudolph Yoga</title>
	<?php endwhile; endif; ?>
	
	<!-- utils.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/utils.css">
	
	<!-- app.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/app.css">
	
	<!-- font awesome CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
	
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
			
	<?php wp_head(); ?>
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class"navbar-left">
					<div class="nav-logo-wrapper">
						<a href="https://www.zenyamamama.com/"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/noun_572881_cc.svg" alt="zym" id="nav-logo-svg"/></a>
					</div>
				</div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="https://www.zenyamamama.com/about/">About</a></li>
                    <li><a class="page-scroll" href="https://www.zenyamamama.com/what-is-a-yama/">What Is a Yama?</a></li>
                    <li><a class="page-scroll" href="https://www.zenyamamama.com/schedule/">Schedule</a></li>
                </ul>
            </div>		
	    </div>
    </nav>
	
	<<header>
        <div class="header-content">
			<div class="header-content-inner">
				<h1>Zen Yama Mama</h1>
				<p>Renee Rudolph Yoga</p>
				<a href="#single-content" class="btn btn-dark btn-lg"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
			</div>
		</div>
    </header>