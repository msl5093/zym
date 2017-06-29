<div id="footer-top">
	<div id="footer-logo-wrapper">
		<a href="https://www.zenyamamama.com"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-footer.svg" alt="zym" id="footer-text-logo" /></a>
	</div>
	<div id="footer-menu-wrapper">
		<ul>
			<li><a class="page-scroll" href="https://www.zenyamamama.com/"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
			<li><a class="page-scroll" href="https://www.zenyamamama.com/about/"><i class="fa fa-id-card" aria-hidden="true"></i>About</a></li>
			<li><a class="page-scroll" href="https://www.zenyamamama.com/what-is-a-yama/"><i class="fa fa-question" aria-hidden="true"></i>What Is a Yama?</a></li>
			<li><a class="page-scroll" href="https://www.zenyamamama.com/schedule/"><i class="fa fa-calendar" aria-hidden="true"></i>Schedule</a></li>
			<li><a class="page-scroll" href="https://www.facebook.com/reneerudolphyoga/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>Renee Rudolph Yoga <i class="fa fa-external-link"></i></a></li>
		</ul>
	</div>
</div>

<footer class="footer">
	<p>
		All content copyright Zen Yama Mama &copy;2017. | All rights reserved.
	</p>
</footer>

<!-- utils.js -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/utils.js"></script>

<!-- app.js -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/app.js"></script>

<script>
	$(document).ready( function(){
		$(function() {
			Jasper.Main.init();
		});
	});
</script>

<?php wp_footer(); ?>

</body>
</html>