<?php

/**
 * Displays single blog post.
 */
try {
	get_header();

	$args = array();

	if (have_posts()) {
		while (have_posts()) {
			the_post();

			get_template_part('template-parts/content/single', 'post', $args);
		}
	} else {
		echo '<h3 class="text-center">Oops ! No data.</h3>';
	}

	get_footer();
} catch (Throwable $th) {
	// Log the error instead of echoing it directly
	error_log($th->getMessage());

	echo '<h3 class="text-center">An error occurred.</h3>';
}
