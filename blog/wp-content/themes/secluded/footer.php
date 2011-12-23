<?php
/**
 * The template for displaying the footer.
 *
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">


			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="theme-credit">
				Designed by <a href="http://www.seismicthemes.com" title="Seismic Themes">Seismic Themes</a>
			</div><!-- #theme-credit -->

		
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	wp_footer();
?>
</body>
</html>
