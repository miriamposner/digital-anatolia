<?php
/**
Template name: Home
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			
			</div><!-- #content -->
		</div><!-- #container -->
		
<?php
	if (class_exists(‘Gallery’)) {
	$Gallery = new Gallery();
	$Gallery -> slideshow($output = true, $post_id = null);
		} ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
