
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<section class="no-results not-found">



    <div class="page-content default-max-width">


        <?php if (is_home() && current_user_can('publish_posts')) : ?>
        <?php

			printf(

				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);
			?>

        <?php elseif (is_search()) : ?>
        <h5 class="page-title1 " style="text-align: center; color:red;">
            <?php
				printf(
					/* translators: %s: Search term. */
					esc_html__('Search:"%s"', 'twentytwentyone'),
					'<span class="page-description search-term "style="color:black;">' . esc_html(get_search_query()) . '</span>'
				);
				?>
        </h5>
        <p class="text-center">
            <?php esc_html_e('We could not find any results for your search. You can give a another try through the search from below', 'twentytwentyone'); ?>
        </p>
        <?php get_search_form(); ?>

        <?php else : ?>

        <p class="text-center">
            <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone'); ?>
        </p>
        <?php get_search_form(); ?>

        <?php endif; ?>


    </div><!-- .page-content -->

</section><!-- .no-results -->