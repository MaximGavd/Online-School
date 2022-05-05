<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="cover_inner_footer d-flex justify-content-between align-items-center">
				<div class="privacy"><a href="#">Политика конфиденциальности</a></div>
				<div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo bloginfo('template_url') ?>/img/logo-footer.png" alt="logo"></a></div>
				<div class="copyrights">© «Открытая школа 360» 2021</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>
