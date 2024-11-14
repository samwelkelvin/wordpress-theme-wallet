<?php

/**
 * Didplays single blog post.
 */
try {
	get_header();
	$args = array();

	if (have_posts()) {
		while (have_posts()) {
			the_post();
			echo 1;
			get_template_part('template-parts/content/single', 'post', $args);
		}
	} else {
		echo '<h3 class"text-center">Oops ! No data.</h3>';
	}

	get_footer();
} catch (Throwable $th) {
	echo $th->getMessage();
}
