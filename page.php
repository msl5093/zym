<?php get_header(); ?>

<!-- content goes here -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="http://localhost/Zym/">Zen Yama Mama</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a class="page-scroll" href="http://localhost/Zym/about">About</a></li>
				<li><a class="page-scroll" href="http://localhost/Zym/what-is-a-yama">What Is a Yama?</a></li>
				<li><a class="page-scroll" href="http://localhost/Zym/schedule">Schedule</a></li>
				<?php get_sidebar( 'navwidgets' ); ?>
			</ul>
		</div>		
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
<header>
	<div class="header-content">
		<div class="header-content-inner">
			<!--h1><a href="#blog" class="page-scroll">Zen Yama Mama</a></h1-->
		</div>
	</div>
</header>
<br />
<br />
<section id="blog">
	<div class="container">
		<div class="row">
			<!--ng-view></ng-view-->
			<div class="col-md-8">
			</div>
			<?php get_sidebar( 'sidebar-2' ); ?>
		</div>
	</div>
</section>
<div class="footer">
	<p class="footer-text">all content copyright Zen Yama Mama &copy;2017 | all rights reserved</p>
	<p class="ext-link"><a href="https://www.linkedin.com/in/michael-lehman-b4377546" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> - <a href="https://github.com/msl5093" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a> - <a href="https://twitter.com/mitch_sl" target="_blank"><i class="fa fa-twitter"></i></a>  - <a href="mailto:msl5093@yahoo.com?Subject=hey" target="_top"><i class="fa fa-envelope" aria-hidden="true"></i></a></p>
</div>
<!-- end page content -->

<?php get_footer(); ?>