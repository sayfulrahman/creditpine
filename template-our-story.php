<?php
/**
 * Template Name: Our Story Template
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
                                    <li>Our Story</li>
                                </ul>
                            </div>
                            <h1>Our Story</h1>
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
							<p>Meet James T. Clarkson, the visionary founder of Credit Right Now (CRN). His story is one of resilience, innovation, and a relentless pursuit of financial empowerment for all.</p>
							<h3>Early Life:</h3>
							<p>James grew up in a small town in Ohio, where he witnessed firsthand the struggles of everyday people trying to navigate the complex world of finance. His parents, both hardworking individuals, often grappled with credit issues that seemed insurmountable. This early exposure to financial challenges sparked in James a deep desire to understand the intricacies of credit and finance.</p>
							<h3>Turning Point:</h3>
							<p>James's journey took a pivotal turn during his college years. While studying economics, he interned at a local bank, where he observed a stark disconnect between the financial advice available and the real needs of the average consumer. It was here that he encountered numerous clients burdened by misinformation and misguided financial strategies, further fueling his determination to demystify the world of credit.
</p>
							<h3>The Spark:</h3>
							<p>The true catalyst came post-graduation, when James himself faced a credit dilemma. Despite his education and understanding of finance, he realized the information available online was either too complex, biased, or simply inaccurate. This personal experience was the final straw, and James decided it was time for a change.</p>
							<h3>Creating CRN:</h3>
							<p>Armed with a passion for finance and a drive to make a difference, James set out to create Credit Right Now. His vision was clear – to build a platform that provided straightforward, reliable, and unbiased credit information. He wanted to create a space where anyone, regardless of their financial background, could learn and make informed decisions.</p>
							<h3>Today:</h3>
							<p>Under James's leadership, CRN has grown into a trusted source of credit knowledge. His personal mantra, "Empowerment through Education," resonates throughout the company. James continues to be actively involved in CRN, often sharing his insights and personal experiences to help others navigate their credit journeys with confidence.</p>
							<p>James T. Clarkson isn't just the founder of Credit Right Now; he's a testament to the power of perseverance and the impact of financial literacy. His story is not just about building a successful platform; it's about creating a movement towards a financially informed and empowered society.</p>
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
