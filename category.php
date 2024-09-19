<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package credit_pine
 */

get_header();
?>

	<main id="primary" class="site-main">
    <!-- Topic part start -->
    <div class="creditpine-abc creditpine-toc">
      <div class="creditpine-abc creditpine-rss">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 col-xl-7">
              <div class="creditpine-abc creditpine-par">
                <div class="creditpine-abc creditpine-ojp">
                  <ul class="creditpine-lmn">
                    <?php
                      // Home link
                      echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';

                      // Category link (if the post belongs to a category)
                     $category = get_queried_object();
					if ($category) {
						echo '<li><span>' . esc_html($category->name) . '</span></li>';
					}
                    ?>
                  </ul>
                </div>
                <?php
				// Category link (if the post belongs to a category)
                $category = get_queried_object();
				if ($category) {
					echo '<h1>' . esc_html($category->name) . '</h1>';
				}
				?>
                <div class="creditpine-abc creditpine-hjj">
                  <ul class="creditpine-lmn">
					<?php
					$category = get_queried_object(); // Get current category
					$last_updated = get_field('last_updated', $category);
					$author_name = get_field('author_name', $category);
					$extra_content = get_field('extra_content', $category);
					?>
					<?php if ($last_updated) { ?>
                    <li>Last Updated: <?php echo esc_html($last_updated); ?></li>
					<?php }; ?>
					<?php if ($author_name) { ?>
                    <li>Written By: <?php echo esc_html($author_name); ?></li>
					<?php }; ?>
                  </ul>
                </div>
                <div class="creditpine-k0o">
                <?php
								// Category link (if the post belongs to a category)
								$categories = get_the_category();
								if (!empty($categories)) {
									$category = $categories[0]; // Assuming it belongs to one category
									$category_link = get_category_link($category->term_id);
									echo '<p>' . esc_html($category->description) . '</p>';
								}
								?>
					<?php
					if ($extra_content) {
                    	echo $extra_content;
					};
					?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topic part end -->
    <!-- Pagelist part start -->
    <div class="creditpine-abc creditpine-pal">
      <div class="creditpine-abc creditpine-iis">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 col-xl-7">
              <div class="creditpine-parts">
                <?php
                  // Get the current category object
                  $current_category = get_queried_object();
                  if ($current_category instanceof WP_Term) {
                    $category_name = $current_category->name;
                  }
                  // Set up the arguments for the query to retrieve posts from the Dog Category
                  $args = array(
                    'post_type' => 'post',
                    'category_name' => $category_name,
                    'posts_per_page' => -1
                );

                  // Run the query
                  $query = new WP_Query($args);

                  // Check if there are posts
                  if ($query->have_posts()) :
                      while ($query->have_posts()) : $query->the_post();
                          // Display your post content here as needed
                          // Example: the_title(), the_content(), etc.
                  ?>
                  <div class="creditpine-part"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                  <?php
                      endwhile;
                      wp_reset_postdata();
                  else :
                      // No posts found
                      echo 'No posts found';
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagelist part end -->
	</main><!-- #main -->

<?php
get_footer();
