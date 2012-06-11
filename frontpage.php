<?php
/**
Template name: Home
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<div id="slideshow">
					<?php echo do_shortcode('[portfolio_slideshow ID=59]');?>
				</div><!-- #slideshow -->
				
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
