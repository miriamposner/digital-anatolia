<?php
/**
Template name: Home
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<img src="<?php bloginfo('template_directory'); ?>/images/DigitalAnatolia_logo.png" title="<?php bloginfo('site_title'); ?>" />
				
				<?php
				/* Run the loop to output the page.
				 * If you want to overload this in a child theme then include a file
				 * called loop-page.php and that will be used instead.
				 */
				get_template_part( 'loop', 'page' );
				?>

			
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
