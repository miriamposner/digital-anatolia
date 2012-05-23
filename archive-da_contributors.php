<?php
/**
Template name: Contributors
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
<!-- <?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>
-->

<!-- <?php
$args = array( 'post_type' => 'da_contributors', 'posts_per_page' => 20 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
	echo '<div class="contributor">';
	echo '<h3>';
	the_title(); 
	echo '</h3>';
	echo '<div class="entry-content">';
	the_content();
	echo '</div>';
	echo '</div>';
endwhile; ?> -->
<div class="contributors">

<?php
  query_posts( array( 'post_type' => 'da_contributors', 'team' => 'on-site' ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<h2>On-Site</h2>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>

<?php
  query_posts( array( 'post_type' => 'da_contributors', 'team' => 'hypercities' ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<h2>Hypercities</h2>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>

<?php
  query_posts( array( 'post_type' => 'da_contributors', 'team' => 'webteam' ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<h2>Web Team</h2>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>

</div>


<?php get_footer(); ?>
