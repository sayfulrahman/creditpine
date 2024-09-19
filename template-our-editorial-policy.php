<?php
/**
 * Template Name: Our Editorial Policy Template
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
                                    <li>Our Editorial Policy</li>
                                </ul>
                            </div>
                            <h1>Our Editorial Policy</h1>
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
                            <h2>Editorial Integrity at Credit Right Now</h2>
                            <p>Our mission at Credit Right Now is to be the leading source of accurate, impartial credit and financial information. We're committed to this by having a diverse team of industry experts who rigorously review all relevant financial data and literature, ensuring no conflicts of interest.</p>
                            <p>Our goal is to provide thorough, well-researched advice on credit and mortgages, not quick fixes or biased recommendations. We offer in-depth, context-sensitive analysis of financial products and strategies, empowering you with the knowledge to make informed decisions for your financial future. We firmly oppose sensationalism or emotional manipulation for traffic or sales.</p>
                            <p>Please note, for specific financial issues, it's essential to consult with a financial advisor; we are not a substitute for professional financial advice.</p>
                            <h3>Integrity of Credit Right Now Staff</h3>
							<p>At Credit Right Now, we do not accept advertising or content from external sources. All content on our site is created by our own staff members, who are free from conflicts of interest. Each member declares that they do not benefit, directly or indirectly, from any external sources that might bias our analysis.</p>
							<p>Our researchers have complete independence in researching and analyzing financial data. Non-researcher employees have no influence over the conclusions we publish.</p>
							<p>Revisions of our financial information are publicly available, so readers can see how we update our content with the latest research.</p>
							<h3>Content Creation Process</h3>
							<p>All information published on Credit Right Now goes through multiple levels of review to ensure accuracy, evidence-based clarity, and impartiality.</p>
							<p>All information published on Credit Right Now goes through multiple levels of review to ensure accuracy, evidence-based clarity, and impartiality.</p>
							<p><strong>The typical process for our content creation is as follows:</strong></p>
							<ul>
								<li>1. Experts and reviewers create an outline to fully address the question/topic.</li>
								<li>2. Expert writes the article.</li>
								<li>3. Article is copyedited by a content editor.</li>
								<li>4. Article is edited by an editor.</li>
								<li>5. Article is reviewed by a reviewer.</li>
								<li>6. Corrections and clarifications are incorporated at every level.</li>
								<li>7. Article is published on the website.</li>
							</ul>
							<p>Each article undergoes extensive writing/editing/reviewing, often requiring dozens of hours from conception to publication. Our pages are regularly updated to reflect the latest in financial research.</p>
							<h3>Advertising</h3>
							<p>As a note of transparency — since we accept no external funding or content, we have no need for an advertising policy.</p>
							<h3>Corrections</h3>
							<p>Credit Right Now is committed to making corrections and clarifications as necessary. We promptly review concerns brought to us by our readers, and if warranted, immediately update content on our website. This includes incorporating new information not available at the time of publication and any other essential updates.</p>
							<p>If you find any inaccuracies on our website, please contact us. Our goal is to be the most trustworthy source of financial information online.</p>
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
