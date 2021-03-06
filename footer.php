<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->


</div><!-- #page -->

	<footer id="colophon" role="contentinfo">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
			
			<div id="site-generator">
				<a href="<?php bloginfo( 'home' ); ?>/category/help/contact/">All Rights Reserved :: For Information: Contact RJ | </a><a href="http://pixelprecisedesigns.com">Maintained by Pixel Precise LLC</a>
			</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</div>
</html>