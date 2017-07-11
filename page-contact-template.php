<?php
/*
 Template Name: Contact
*/
?>

<?php get_header( 'single' ); ?>
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	</div>
	<div class="row" id="single-content">
		<div class="col-md-12 single-page-content">
			<?php the_content(); ?>
            <section class="services" id="contact-section">
                    <div class="row text-center">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="service-item tile">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-envelope fa-stack-1x text-primary inner-icon"></i>
                                    </span>
                                    <h4>
                                        <strong>Email</strong>
                                    </h4>
                                    <span class="contact-desc">
                                        <p>
                                            Feel free to email me anytime with any questions or inquiries. I make every effort to respond as quickly as possible and love to hear any feedback you may have:
                                        </p> 
                                        <p>
                                            <a href="mailto:reneerudolphyoga@gmail.com?Subject=Renee%20Rudolph%20Yoga%20Contact" target="_top">reneerudolphyoga@gmail.com <i class="fa fa-external-link"></i></a>
                                        </p>
                                    </span>
                                    <!--a href="mailto:reneerudolphyoga@gmail.com?Subject=Zym%20Yoga" target="_top" class="btn btn-light">Email</a-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="service-item tile">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-phone fa-stack-1x text-primary inner-icon"></i>
                                    </span>
                                    <h4>
                                        <strong>Phone</strong>
                                    </h4>
                                    <span class="contact-desc">
                                        <p>
                                            Don't hesitate to contact me by phone for questions regarding classes, events, and concerns:
                                        </p> 
                                        <p>
                                            <a href="tel: +17175766466">717-576-6466</a>
                                        </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
		</div>
	</div> 
	<?php endwhile; endif; ?>
</div><!-- end content -->
<br />
<br />

<?php get_footer(); ?>