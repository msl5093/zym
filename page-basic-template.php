<?php
/*
 Template Name: Basic
*/
?>

<?php get_header( 'single' ); ?>
<br />
<br />
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-8">
				<p class="post-meta-header"><?php the_time('F jS, Y'); ?></p>
			</div>
			<div class="col-md-4">
				<p class="post-meta-header"><?php the_author(); ?></p>
			</div>
	</div>
	<br />
	<div class="row">
		<div class="col-md-8 page-header-left">
			<h2 class="post-title" style="text-align:left;"><?php the_title(); ?></h2>
			<p class="" style="text-align:left"><i><?php the_tags(); ?></i></p>
		</div>
		<br />
		<br />
		<div class="col-md-4">
			<!--?php
				if ( has_post_thumbnail() ) 
				{ 
					echo "<figure>" . the_post_thumbnail( 'medium_large', [ 'class' => 'featured-image' ] ) . "</figure>";
					echo "<figcaption class='img-caption'><p><i>" . get_post(get_post_thumbnail_id())->post_content . "</i></p></figcaption>";
				}
				else
				{
					echo "<img src='" . get_template_directory_uri() . "/dist/img/banner.jpg' alt='test' class='featured-image' />";
					echo "<figcaption class='img-caption'><p><i></i></p></figcaption>";	
				}
			?-->
		</div>
	</div>
	<br />
	<br />
	<div class="row">
		<div class="col-md-8 single-page-content">
			<?php the_content(); ?>
		</div>
		<div class="col-md-4">
			<figure></figure>
		</div>
	</div> 
	<?php endwhile; endif; ?>
</div><!-- end content -->
<br />
<br />

<?php get_footer(); ?>