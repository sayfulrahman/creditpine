<?php
/**
 * Template Name: Contact Us Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package credit_pine
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Form part start -->
		<div class="creditpine-abc creditpine-for">
			<div class="creditpine-abc creditpine-cis">
			<div class="container">
				<div class="row justify-content-center">
				<div class="col-md-12 col-xl-6">
					<div class="creditpine-abc creditpine-xxy">
					<h2>Get in Touch Today!</h2>
					<?php echo do_shortcode('[wpforms id="46"]'); ?>
					<div class="creditpine-abc creditpine-bpa">
						<div class="creditpine-abc">
							<div class="creditpine-abc creditpine-spa">
								<div class="creditpine-abc creditpine-bor"></div>
							</div>
							<div class="creditpine-abc creditpine-gss"><span class="creditpine-gsa">Check out our Social media</span></div>
						</div>
						<div class="creditpine-abc creditpine-s8c">
							<a target="_blank" href="https://www.linkedin.com/company/examine-com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="social-icons" width="18px"></a>
							<a target="_blank" href="https://twitter.com/Examinecom"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="social-icons" width="18px"></a>
							<a target="_blank" href="https://www.instagram.com/examinedotcom/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="social-icons" width="18px"></a>
							<a target="_blank" href="https://www.facebook.com/Examinecom/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="social-icons" width="18px"></a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<div class="creditpine-abc creditpine-shs">
						<div class="creditpine-abc creditpine-hed">
							<h2>Contact us</h2>
							<p>You can also reach us using the following methods.</p>
						</div>
						<div class="creditpine-abc creditpine-xyd">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-10.svg" alt=""></span>
							<p><a href="/">Creditrightnow.com</a> Inc<br>1280 Gulf Shore Blvd N,<br>Suite 200, Naples, FL 34102, USA</p>
						</div>
						<div class="creditpine-abc creditpine-xyd creditpine-center">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-11.svg" alt=""></span>
							<p class="leading-6"><a href="tel:(239) 555-0198">(239) 555-0198</a></p>
						</div>
						<div class="creditpine-abc creditpine-xyd creditpine-center">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-12.svg" alt=""></span>
							<p class="leading-6"><a href="mailto:contact@creditrightnow.com">contact@creditrightnow.com</a></p>
						</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		<!-- Form part end -->
	</main><!-- #main -->

<?php
get_footer();
