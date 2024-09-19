<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package credit_pine
 */

?>
<div class="creditpine-abc creditpine-mod">
	<div class="creditpine-abc creditpine-m2d">
		<a class="creditpine-abc cro"><img src="https://www.creditpine.com/wp-content/themes/credit-pine/assets/img/Multiply.svg" width="28px" height="28px"></a>
		<div id="matmirData" class="creditpine-abc creditpine-bop"></div>
	</div>
</div>
	<!-- Footer part start -->
	<?php
		$footer_bg_color = get_theme_mod('footer_background_color', '#1b5b83');
		$footer_padding_top = get_theme_mod('footer_padding_top', '50px');
		$footer_padding_bottom = get_theme_mod('footer_padding_bottom', '50px');
	?>
	<footer class="creditpine-abc creditpine-yui site-footer" style="background-color: <?php echo esc_attr($footer_bg_color); ?>;">
    <div class="creditpine-abc creditpine-yss" style="padding-top: <?php echo esc_attr($footer_padding_top); ?>; padding-bottom: <?php echo esc_attr($footer_padding_bottom); ?>;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xl-3 creditpine-uuy">
            <div class="creditpine-abc">
              <h3>Get evidence-based info:</h3>
              <div class="creditpine-abc creditpine-xhe">
                <input type="email" required="" class="" placeholder="Your email address" value="">
                <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Send.svg" alt=""></span>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xl-3">
            <div class="creditpine-abc">
              	<?php
				// Get the 'my_custom_setting' value from the Theme Customizer
				$footer_1_heading = get_theme_mod('footer_1_heading');
				?>
				<?php if( ! empty($footer_1_heading) ){ ?>
				<h3><?php echo esc_html($footer_1_heading); ?></h3>
				<?php }; ?>
			  	<?php
				/**
				 * Bottom Footer Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-2' ) ) {
					wp_nav_menu(
						array(
							'menu'            => 'Footer 1',
							'menu_class'      => 'creditpine-lmn',
							'menu_id'         => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'echo'            => true,
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-2',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => '',
						)
					);
				};
				?>
            </div>
          </div>
          <div class="col-md-12 col-xl-3">
            <div class="creditpine-abc">
              	<?php
				// Get the 'my_custom_setting' value from the Theme Customizer
				$footer_2_heading = get_theme_mod('footer_2_heading');
				?>
				<?php if( ! empty($footer_2_heading) ){ ?>
				<h3><?php echo esc_html($footer_2_heading); ?></h3>
				<?php }; ?>
			 	 <?php
				/**
				 * Bottom Footer Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-3' ) ) {
					wp_nav_menu(
						array(
							'menu'            => 'Footer 2',
							'menu_class'      => 'creditpine-lmn',
							'menu_id'         => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'echo'            => true,
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-3',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => '',
						)
					);
				};
				?>
            </div>
          </div>
          <div class="col-md-12 col-xl-3">
            <div class="creditpine-abc">
              	<?php
				// Get the 'my_custom_setting' value from the Theme Customizer
				$footer_3_heading = get_theme_mod('footer_3_heading');
				?>
				<?php if( ! empty($footer_3_heading) ){ ?>
				<h3><?php echo esc_html($footer_3_heading); ?></h3>
				<?php }; ?>
			  <?php
				/**
				 * Bottom Footer Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-4' ) ) {
					wp_nav_menu(
						array(
							'menu'            => 'Footer 3',
							'menu_class'      => 'creditpine-lmn',
							'menu_id'         => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'echo'            => true,
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-4',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => '',
						)
					);
				};
				?>
            </div>
          </div>
          <div class="col-md-12 col-xl-3 creditpine-ggg">
            <div class="creditpine-abc">
				<?php
				// Get the 'my_custom_setting' value from the Theme Customizer
				$footer_4_heading = get_theme_mod('footer_4_heading');
				?>
				<?php if( ! empty($footer_4_heading) ){ ?>
				<h3><?php echo esc_html($footer_4_heading); ?></h3>
				<?php }; ?>
              <div class="creditpine-abc creditpine-xhe">
                <input type="email" required="" class="" placeholder="Your email address" value="">
                <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Send.svg" alt=""></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
	// Get the 'my_custom_setting' value from the Theme Customizer
	$footer_bottom_bg_color = get_theme_mod('footer_bottom_bg_color', '#0e2f44');
	?>
    <div class="creditpine-abc creditpine-btm" style="background-color: <?php echo esc_attr($footer_bottom_bg_color); ?>;">
      <div class="container">
        <div class="row">
          <div class="col">
			<?php
			// Get the 'my_custom_setting' value from the Theme Customizer
			$footer_bottom_text = get_theme_mod('footer_bottom_text');
			?>
			<?php if( ! empty($footer_bottom_text) ){ ?>
			<p><?php echo esc_html($footer_bottom_text); ?></p>
			<?php }; ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer part end -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
