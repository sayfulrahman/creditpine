<?php
/**
 * Template Name: About Us Template
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
                                    <li>About Us</li>
                                </ul>
                            </div>
                            <h1>About Us</h1>
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
                            <p>Welcome to Credit Right Now! We're here to revolutionize your understanding of credit in a way that's simple, transparent, and truly beneficial for you.</p>
							<h3>Our Inspiration:</h3>
                            <p>We noticed a troubling gap in the online world – a lack of accurate and transparent information about credit. Navigating through the maze of credit advice often leads to frustration. Misinformation abounds, and much of what's out there is influenced more by corporate interests than your financial well-being. This realization sparked our journey.</p>
							<h3>The Problem:</h3>
                            <p>The internet is rife with credit advice that's either misleading or flat-out wrong. Many recommendations are designed more for profit than for your prosperity. Furthermore, a lot of this information, though well-intentioned, falls short of being reliable. It's not uncommon to find content that's poorly researched or not vetted by true industry experts. This creates a risky landscape for anyone trying to make informed financial decisions.</p>
							<h3>Our Solution:</h3>
                            <p>At Credit Right Now, we cut through the noise. Our mission is to empower you with knowledge about credit – how it works, how to improve it, and how to master your financial future. We've built a platform that's not just another website; it's a learning hub free from conflicts of interest and untainted by corporate deals.</p>
							<h3>Our Team:</h3>
                            <p>We pride ourselves on our team of over 10 credit industry experts, who bring years of experience and insight. They're the backbone of our content creation, ensuring that every piece of advice we offer is thoroughly researched, expertly vetted, and truly useful.</p>
							<h3>Our Promise:</h3>
                            <p>With Credit Right Now, you're not just reading another article; you're taking a step towards financial literacy and independence. No hidden agendas, no misleading promotions – just pure, valuable knowledge at your fingertips.</p>
                            <p>Join us on this journey to reclaim your financial future, one credit tip at a time!</p>
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
