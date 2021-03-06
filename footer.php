<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

<div id="nehlogo">
	<span>
	<img src="<?php bloginfo('template_directory'); ?>/images/NEH.png" title="<?php bloginfo('nehlogo'); ?>"/>
	</span>
</div><!-- #nehlogo -->

	<div id="footer" role="contentinfo">
		<div id="colophon">
	
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
			<div id="site-info">
				Copyright <?php the_time('Y') ?>
			</div><!-- #site-info -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>