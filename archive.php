<?php get_header( 'single' ); ?>
<br />
<br />

<!-- content -->
<div class="container">
	<div class="archive-type-area">
		<?php
			if ( is_day() ) : 
				?><h2 class=""><?php get_the_date(); ?></h2><?php
			elseif ( is_month() ) :
				?><h2 class=""><?php the_time('F Y'); ?></h2><?php
			elseif ( is_year() ) :
				?><h2 class=""><?php the_time('Y'); ?></h2><?php
			elseif ( is_tag() ) :
				?><h2 class="">Tagged: <?php single_tag_title(); ?></h2><?php
			else :
				?><h2 class="">Archive</h2><?php
			endif;
		?>
	</div>
	<br />
	<div class="row" id="archive">
		<div class="col-md-8">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post();  ?>
					<div class="feat-img-container">
						<!--?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?-->
						<!--?php echo '<div class="feat-img-container" style="background: url('. $url.');">'; ?-->
						<div class="feat-img-container-inner">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
					</div>
					<div class="tile" id="post-<?php the_ID(); ?>">
						
						<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
						<br />
						<?php the_content(); ?>
						<p class="post-tags"> <?php the_tags('Tags:', ','); ?></p>
					</div>
					<br /><br /><br />
			<?php endwhile; endif; ?>
		</div>
		<div class="col-md-4">
			<div class="tile">
				<div class="wp-widgets">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<br />
<!-- end page content -->

<?php get_footer(); ?>