<?php

try {
	/**
	 * Add theme support.
	 */
	function reader_theme_support()
	{
		// adds dynamic title tags to page titles
		add_theme_support('title-tag');

		// allow users to add their own logo
		add_theme_support('custom-logo');

		// allow users to add post thumnails
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'reader_theme_support', 0);

	/**
	 * Load config files.
	 */
	require get_template_directory() . '/inc/config.php';

	/**
	 * Load scripts files.
	 */
	require get_template_directory() . '/inc/scripts.php';

	/**
	 * Load menu walkers.
	 */
	require get_template_directory() . '/inc/class-wp-bootstrap-navwalker-footer.php';

	require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

	// Register menu walkers

	// main menu
	register_nav_menu('primary', __('Header Menu (Primary menu)'));

	// footer
	register_nav_menu('footer', __('Footer Menu'));

	/**
	 * Remove default wordpress elipses on excerps.
	 *
	 * @param mixed $more
	 */
	function reader_excerpt_more($more)
	{
		// return '<a class="read-more btn btn-main " href="' . get_permalink(get_the_ID()) . '">Read More</a>';
		return '...';
	}

	add_filter('excerpt_more', 'reader_excerpt_more');

	/**
	 * Load theme customizer.
	 */

	require get_template_directory() . '/inc/customizer.php';

	/**
	 * Load Aurthor social accounts.
	 */
	require get_template_directory() . '/inc/aurthors-social-accounts.php';

	/**
	 * Load custom widgets.
	 */
	require get_template_directory() . '/inc/create-widgets-area.php';

	require get_template_directory() . '/classes/widgets/register-widgets.php';
} catch (Throwable $th) {
	echo $th->getMessage();

	throw $th;
}
