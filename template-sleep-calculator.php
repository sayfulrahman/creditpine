<?php
/**
 * Template Name: Sleep Calculator Template
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
                                    <li>Sleep Calculator</li>
                                </ul>
                            </div>
                            <h1>Sleep Calculator</h1>
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
                            <p>Mattress Miracle is currently constructing our sleep calculator.</p>
							<p>Visit this page again in the coming days and weeks once it’s finished.</p>
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
