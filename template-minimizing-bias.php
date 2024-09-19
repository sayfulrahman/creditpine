<?php
/**
 * Template Name: Minimizing Bias Template
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
                                    <li>Minimizing Bias</li>
                                </ul>
                            </div>
                            <h1>Minimizing Bias</h1>
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
                            <p>At Credit Right Now, we take great care to ensure our information on credit and finances is accurate and fair. Here's how we do it:</p>
                            <ul>
								<li>1. Diverse Expert Team: We have a team with experts from all areas of credit and mortgages. This mix helps us look at things from many angles, reducing bias in our work.</li>
								<li>2. No Conflicts of Interest: None of our team members have money ties to credit companies or banks. This way, you can trust that our advice is based on facts, not outside interests.</li>
								<li>3. Careful Review Process: Everything we write goes through a detailed check. We research deeply, edit carefully, and double-check facts. This makes sure our information is right and fair.</li>
								<li>4. Always Updating: We keep our content fresh and up-to-date with the latest in credit and finance. This stops old or wrong info from sneaking into our advice.</li>
								<li>5. Focus on Education: Our main goal is to teach. We don't sell anything or push services. We suggest talking to financial experts for personal advice, while we provide general info to help you understand credit better.
</li>
							</ul>
							<p>We're dedicated to giving you reliable and unbiased information, helping you make smart choices about your money.</p>
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
