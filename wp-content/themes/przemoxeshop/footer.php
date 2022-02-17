<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package przemoxeShop
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container text-white px-3 p-md-0">
			<div class="row">
				<div class="col-xl-6 col-left">
					<div class="row">
						<div class="col-md-8">
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere eveniet corrupti eligendi, inventore explicabo vero laudantium aliquid magni sequi nulla cupiditate, voluptatem voluptatibus.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 footer-quick-links">
							<h4 class="pb-3 pt-3">Quick Links</h4>
							<ul>
								<li>About</li>
								<li>Contact Us</li>
								<li>FAQ</li>
								<li>Blog</li>
								<li>Terms of Use</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-right">
					<div class="row">
						<div class="col-12">
							<h4 class="pb-3">SUBSCRIBE</h4>
							<div class="w-100">
								<?php echo do_shortcode('[contact-form-7 id="29" title="Formularz 1"]'); ?>
							</div>
							<h4 class="pb-3">FOLLOW US</h4>
							<div class="pt-2">
								<i class="bi bi-facebook "></i>
								<i class="bi bi-instagram ps-3"></i>
								<i class="bi bi-youtube ps-3"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
