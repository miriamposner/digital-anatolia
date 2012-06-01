<?php
/**
Template name: Home
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<img src="<?php bloginfo('template_directory'); ?>/images/DigitalAnatolia_logo.png" title="<?php bloginfo('site_title'); ?>" />
				
				<?php echo do_shortcode('[portfolio_slideshow ID=59]');?>
			
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
