<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package credit_pine
 */

get_header();
?>

	<main id="primary" class="site-main">
    <!-- Content part start -->
    <div class="creditpine-abc creditpine-4li">
        <div class="creditpine-abc creditpine-4cs">
            <div class="container">
				<div class="row align-items-center">
                    <div class="col-md-12 col-xl-5">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group 33.png" alt="">
					</div>
					<div class="col-md-12 col-xl-7">
						<div class="creditpine-parts">
							<h2>Oops,<br><span>nothing</span> here...</h2>
							<p class="pt-2">Uh oh, we can't seem to find the page you're looking for. Try going back to previous page or Contact us for more information.</p>
							<div class="mt-4">
								<a href="<?php echo home_url(); ?>">Go Back</a>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content part end -->
	</main><!-- #main -->

<?php
get_footer();
