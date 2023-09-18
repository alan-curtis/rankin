<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RWJones
 */

?>
<?php
if (have_rows('footer', 'option')) {
  while (have_rows('footer', 'option')) {
    the_row();
	$footerlogo = get_sub_field('footer_logo');
    $footercopyright = get_sub_field('footer_copyright');
  }
}
?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div class="footer-image">
						<img src="<?= $footerlogo; ?>" alt="Rankin Logo" class="footer-bg">
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="footer-nav">
					<?php
					wp_nav_menu(
						array(
						'theme_location' => 'menu-2',
						'menu_id' => 'footer-nav',
						)
					);
           			?>
					</div>

				</div>
				<div class="col-lg-4 col-12 px-0 px-md-2">
				<div class="footer-copyright">
                    <?php echo $footercopyright; ?>
                  </div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
