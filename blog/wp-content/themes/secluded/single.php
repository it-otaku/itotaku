<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
