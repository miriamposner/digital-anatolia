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
				
				<div id="nehlogo">
					<img src="<?php bloginfo('template_directory'); ?>/images/NEH.png" title="<?php bloginfo('site_title'); ?>" />
				</div><!-- #nehlogo -->
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
