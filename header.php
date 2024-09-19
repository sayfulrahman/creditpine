<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package credit_pine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7KJ6T7B');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7KJ6T7B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'credit-pine' ); ?></a>

	<!-- Header part start -->
	<header id="masthead" class="creditpine-abc creditpine-1xy site-header">
		<div class="creditpine-abc creditpine-xss">
		<div class="container">
			<div class="row">
			<div class="col-5">
				<div class="creditpine-logo"><a href="<?php echo home_url(); ?>">
				<?php
					// Get the site logo URL from the Customizer setting
					$logo_id = get_theme_mod('custom_logo');
					$logo_url = wp_get_attachment_image_url($logo_id, 'full');

					// Output the site logo
					if ($logo_url) {
						echo '<img src="' . esc_url($logo_url) . '" alt="" width="75">';
					}else{
						$site_title = get_bloginfo('name');
						echo $site_title;
					}
					?>
			</a></div>
			</div>
			<div class="col-7">
				<div class="creditpine-abc creditpine-nav">
				<?php
				/**
				 * Primary Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-1' ) ) {
					wp_nav_menu(
						array(
							'menu'         => 'Primary Header',
							'menu_class'   => 'creditpine-lmn',
							'menu_id'      => '',
							'container'    => '',
							'container_class' => '',
							'container_id' => '',
							'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
							'before'       => '',
							'after'        => '',
							'link_before'  => '',
							'link_after'   => '',
							'echo'         => true,
							'depth'        => '2',
							'walker'       => new WP_Bootstrap_Navwalker(),
							'theme_location' => 'menu-1',
							'items_wrap'   => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing' => '',
						)
					);
				};
				?>
				<div class="creditpine-abc creditpine-yun">
					<a href="#" class="creditpine-7xt">Get Your Free Credit Report</a>
				</div>
				</div>
				<div class="creditpine-abc creditpine-rso">
				<button type="button" class="creditpine-aar" id="creditpine-aar"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Menu.svg"
					alt=""></button>
				</div>
			</div>
			</div>
		</div>
		</div>
	</header>
	<!-- Header part end -->
	<!-- Phone responsive start -->
	<div id="creditpine-yjk" class="creditpine-abc creditpine-yjk">
		<div class="creditpine-abc creditpine-lll">
		<div class="creditpine-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/website.svg" alt="" width="45"></a></div>
		<button type="button" class="creditpine-aar" id="creditpine-xxx"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Multiply.svg"
			alt=""></button>
		</div>
		<div class="creditpine-abc creditpine-nav">
		<?php
		/**
		 * Primary Menu
		 * wp_nav_menu
		 *
		 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
		 */
		if ( has_nav_menu( 'menu-1' ) ) {
			wp_nav_menu(
				array(
					'menu'         => 'Primary Header',
					'menu_class'   => 'creditpine-lmn',
					'menu_id'      => '',
					'container'    => '',
					'container_class' => '',
					'container_id' => '',
					'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
					'before'       => '',
					'after'        => '',
					'link_before'  => '',
					'link_after'   => '',
					'echo'         => true,
					'depth'        => '2',
					'walker'       => new WP_Bootstrap_Navwalker(),
					'theme_location' => 'menu-1',
					'items_wrap'   => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'item_spacing' => '',
				)
			);
		};
		?>
		<div class="creditpine-abc creditpine-oun">
			<a href="#" class="creditpine-7xt">Get Your Free Credit Report</a>
		</div>
		</div>
	</div>
	<!-- Phone responsive end -->