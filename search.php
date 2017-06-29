<?php
	get_header();
	global $wp_query;
?>
<br />
<br />

<!-- content -->
<div class="container">
	<h2 class=""><?php echo $wp_query->found_posts; ?><?php _e( ' results found for', 'locale' ); ?>: "<?php the_search_query(); ?>"</h2>
	<br />
	<div class="row">
		<div class="col-md-8">
			<?php if ( have_posts() ) { ?>
				<ul class="search-results-list">
					<?php while ( have_posts() ) { the_post(); ?>
						<div class="feat-img-container">
							<!--?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?-->
							<!--?php echo '<div class="feat-img-container" style="background: url('. $url.');">'; ?-->
							<div class="feat-img-container-inner">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
						</div>
						<div class="tile">
							<li>
								<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
								<p class=""><?php echo substr(get_the_excerpt(), 0,500); ?></p>
								<p class="post-tags"> <?php the_tags('Tags:', ','); ?></p>
							</li>
						</div>
					<br />
					<?php } ?>
				</ul>
				<br />
			   <?php paginate_links(); ?>
			<?php } ?>
		</div>
		<div class="col-md-4">
			<div class="tile">
				<div class="wp-widgets">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
</div><!-- end content -->

<?php get_footer(); ?>