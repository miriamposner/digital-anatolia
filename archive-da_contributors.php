<?php
/**
Template name: Contributors
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<div class="contributors">

<h2>On-Site</h2>
<?php
  query_posts( array( 'post_type' => 'da_contributors', 'team' => 'on-site' ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>

<h2>Hypercities</h2>
<?php
  query_posts( array( 'post_type' => 'da_contributors', 'team' => 'hypercities' ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>

<h2>Web Team</h2>
<?php
  query_posts( array( 'post_type' => 'da_contributors', 'team' => 'webteam' ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>

</div>


<?php get_footer(); ?>
