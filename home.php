<?php

// Displays all blog posts or static page

get_header();

if (is_home()) {
	$args = array();

	// if blog layout is list or not set use list
	if (!get_theme_mod('blog-layout') || 'list' === get_theme_mod('blog-layout')) {
		get_template_part('template-parts/content/list', 'posts-template', $args);
	} else {
		get_template_part('template-parts/content/grid', 'posts-template', $args);
	}
} else {
	get_template_part('template/default', 'page-template');
}

get_footer();
