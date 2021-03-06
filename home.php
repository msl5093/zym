<?php get_header(); ?>

<!-- content -->
<br />
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="about-svg-container">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/noun_572881_cc_blk.svg" alt="zym" id="about-svg" />
				</div>
				<h2>Renee | Rudolph | Yoga</h2>
				<br />
				<p class="lead">My name is Renee Rudolph and I am a yoga teacher based out of Chambersburg, PA. I completed my <a href="https://www.yogaalliance.org/Credentialing/For_Teachers/RYT_200" target="_blank" class="external-link">RYT-200 (registered yoga teacher) training <i class="fa fa-external-link"></i></a> through <a href="http://ommyyoga.com/" target="_blank" class="external-link">Om My Yoga Academy <i class="fa fa-external-link"></i></a> in March 2017 and have been teaching since November 2016.</p>
			</div>
		</div>
	</div>
</section>
<br />
<br />
<br />
<section id="services" class="services">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-10 col-lg-offset-1">
				<h2>Follow</h2>
				<hr class="small" />
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="service-item">
							<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-envelope fa-stack-1x text-primary inner-icon"></i>
						</span>
							<h4>
								<strong>Email</strong>
							</h4>
							<p>Email is a quick and easy way to get in touch regarding classes and events.</p>
							<br />
							<a href="mailto:reneerudolphyoga@gmail.com?Subject=Zym%20Yoga" target="_top" class="btn btn-light">Email</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="service-item">
							<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-calendar-check-o fa-stack-1x text-primary inner-icon"></i>
						</span>
							<h4>
								<strong>Schedule</strong>
							</h4>
							<p>Click below to download the current month's schedule of classes and events.</p>
							<br />
							<a href="<?php echo get_template_directory_uri(); ?>/dist/August-2017-schedule.pdf" class="btn btn-light" download>Schedule</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="service-item">
							<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pencil fa-stack-1x text-primary inner-icon"></i>
						</span>
							<h4>
								<strong>Gaia Kosha</strong>
							</h4>
							<p>Sign up for Vinyasa mat, Mommy and Me, and aerial classes!</p>
							<br />
							<a href="http://www.gaiakosha.com/" target="_blank" class="btn btn-light">Gaia Kosha</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="service-item">
							<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook-official fa-stack-1x text-primary inner-icon"></i>
						</span>
							<h4>
								<strong>Find me on Facebook</strong>
							</h4>
							<p>Follow me on Facebook to get the latest updates, posts, and important information.</p>
							<br />
							<a href="https://www.facebook.com/reneerudolphyoga/" target="_blank" class="btn btn-light">Facebook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--aside class="callout">
	<div class="text-vertical-center">
		<h1>Vertically Centered Text</h1>
	</div>
</aside>
<br />
<br /-->
<br />

<section id="grid">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="info-item">
							<div class="feat-img-container">
								<div class="feat-img-container-inner">
									<h2><a href="https://www.zenyamamama.com/about/">About</a></h2>
								</div>
							</div>
							<!--a href="https://www.zenyamamama.com/about/">
								<img class="img-info img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/about.jpeg">
							</a-->
						</div>
					</div>
					<div class="col-md-6">
						<div class="info-item">
							<div class="feat-img-container1">
								<div class="feat-img-container-inner">
									<h2><a href="https://www.zenyamamama.com/welcome/">Welcome</a></h2>
								</div>
							</div>
							<!--a href="https://www.zenyamamama.com/about/">
								<img class="img-info img-responsive" src="<?php echo get_template_directory_uri(); ?>/dist/img/about.jpeg">
							</a-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br />
<aside class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<!--a href="#" class="btn btn-lg btn-light">Click</a-->
				<a href="#top" class="btn btn-lg btn-dark">TOP <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</aside>

<?php get_footer(); ?>