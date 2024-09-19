<?php
/**
 * Template Name: Jobs Opportunities Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package credit_pine
 */

get_header();
?>

	<main id="primary" class="site-main">
    <!-- Privacy part start -->
    <div class="creditpine-abc creditpine-pvc">
        <div class="creditpine-abc creditpine-css">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <div class="creditpine-abc creditpine-par">
                            <div class="creditpine-abc creditpine-ojp">
                                <ul class="creditpine-lmn">
                                    <li>Home</li>
                                    <li>Jobs & Opportunities</li>
                                </ul>
                            </div>
                            <h1>Jobs & Opportunities</h1>
                            <div class="creditpine-abc creditpine-qjj">
                                <ul class="creditpine-lmn">
                                    <?php
									$last_updated = get_the_modified_date();

									if ($last_updated) { ?>
										<li><?php echo 'Last Updated: ' . esc_html($last_updated); ?></li>
									<?php
									}
									?>
									<?php
										// Get the current page's ID
										$current_page_id = get_the_ID();

										// Get the author's name (user who created the page)
										$page_author_id = get_post_field('post_author', $current_page_id);
										$page_author_name = get_the_author_meta('display_name', $page_author_id);
									?>
                                    <li>Written By: <?php echo esc_html($page_author_name); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy part end -->
    <!-- Content part start -->
    <div class="creditpine-abc creditpine-qli">
        <div class="creditpine-abc creditpine-qcs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <article>
							<p>Join Our Team at Credit Right Now</p>
							<p>At Credit Right Now, we are constantly striving to enrich our team with experienced professionals who share our passion for financial empowerment.</p>
							<h3>Current Openings:</h3>
							<p>As of now, we are not actively seeking writers or editors. However, our team is growing, and we are on the lookout for industry experts in the fields of credit and mortgages. If you have a wealth of experience in these areas and are eager to contribute to a platform that makes a real difference in people's financial lives, we would love to hear from you.</p>
							<h3>What We're Looking For:</h3>
							<p><strong>We're searching for individuals with:</strong></p>
							<ul>
								<li>- In-depth knowledge and hands-on experience in credit or mortgage industries.</li>
								<li>- A strong desire to educate and empower consumers through clear, accurate, and unbiased information.</li>
								<li>- The ability to translate complex financial concepts into understandable, engaging content.</li>
							</ul>
							<h3>How to Apply:</h3>
							<p>If you're ready to be a part of a dynamic team that's reshaping the way people understand and manage their finances, we encourage you to get in touch. Please send your application and resume to hiring@creditrightnow.com.</p>
							<p>At Credit Right Now, we're not just building a team; we're cultivating a community of experts committed to making financial literacy accessible to everyone.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content part end -->
	</main><!-- #main -->

<?php
get_footer();
