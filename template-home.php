<?php
/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package credit_pine
 */

get_header();
?>

	<main id="primary" class="site-main">
  <!-- Banner part start -->
  <div class="creditpine-abc creditpine-bbi">
    <div class="creditpine-abc creditpine-iss">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <div class="creditpine-abc creditpine-par">
              <h1>EMPOWERING<br>YOUR FINANCIAL FUTURE</h1>
              <div class="creditpine-k0o">
                <p>At Credit Right Now, we're committed to clarity and truth in credit and personal finance. With expert insights and unbiased advice, we guide you towards informed choices for a healthier financial life – no ads, no industry ties, just pure, evidence-based knowledge.</p>
              </div>
              <a href="#" class="creditpine-yxt">Get Your Free Credit Report <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forward.svg" alt="" width="18px"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner part end -->
  <!-- Feature part start -->
  <div class="creditpine-abc creditpine-fta">
    <div class="creditpine-abc creditpine-fos">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="creditpine-abc creditpine-xyy glider-contain">
              <div class="glider">
                <div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle 5.png" alt=""></div>
                <div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle 8.png" alt=""></div>
                <div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle 6.png" alt=""></div>
				<div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forbes_logo.png" alt=""></div>
              </div>
              <button aria-label="Previous" class="glider-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Back.svg" alt=""></button>
              <button aria-label="Next" class="glider-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forward.svg" alt=""></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature part end -->
  <!-- CTA part start -->
  <div class="creditpine-abc creditpine-cta">
    <div class="creditpine-abc creditpine-yos">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="creditpine-abc creditpine-loi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information.png" alt="" width="70">
              <h3>We analyze thousands of web pages</h3>
              <p>Credit Right Now is by far the largest resource on credit and personal finance.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="creditpine-abc creditpine-loi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/website.png" alt="" width="70">
              <h3>Using a constantly updated fact database</h3>
              <p>Our database is updated daily by your team of fact checkers and researchers.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="creditpine-abc creditpine-loi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-page.png" alt="" width="70">
              <h3>Without any conflicts of interest</h3>
              <p>Hundreds of thousands of readers rely on our neutrality and objectivity. No ads, sponsorships, or
                industry ties.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CTA part end -->
  <!-- Explore part start -->
  <div class="creditpine-abc creditpine-exp">
    <div class="creditpine-abc creditpine-ios">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-9">
            <div class="creditpine-abc creditpine-poi">
              <h4>Explore Credit Right Now</h4>
              <div class="creditpine-gfr">
                <p>Credit Right Now' focuses on two key areas: Credit and Personal Finance. We tackle your biggest questions about the often confusing world of credit and personal finance. Good credit is essential in today's economy, and we're here to keep you updated with the most vital and useful credit information. This helps you make smarter financial decisions so you can live a happier, healthier and more fulfilling life with you and your family.</p>
                <h5>Topics</h5>
                <div class="creditpine-abc creditpine-jkl">
					<?php
					$categories = get_categories();

					if ($categories) {
						echo '<ul class="creditpine-lmn">';
						foreach ($categories as $category) {
							echo '<li><a href="' . get_category_link($category->term_id) . '"><span><img src="http://creditrightnow.com/wp-content/themes/credit-pine/assets/img/Circled Right.svg" alt=""></span>' . $category->name . '</a></li>';
						}
						echo '</ul>';
					}
					?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Explore part end -->
	</main><!-- #main -->

<?php
get_footer();
