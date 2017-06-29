<?php
/*
 Template Name: About
*/
?>
<?php get_header(); ?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="<?php echo get_home_url(); ?>">Zen Yama Mama</a>
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
	</div>
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
			<div class="col-md-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="single-post">
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>
			</div>
			<div>
				<?php get_sidebar( 'sidebar-2' ); ?>
			</div>
		</div>
	</div>
</section>
<div class="footer">
	<p class="footer-text">all content copyright Zen Yama Mama &copy;2017 | all rights reserved</p>
	<p class="ext-link">- <a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> -</p>
</div>
<!-- end page content -->

<?php get_footer(); ?>