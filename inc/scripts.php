<?php

/**
 * Register css scripts.
 */
function wallet_load_styles()
{
	wp_register_style('wallet-additional-style', THEME_DIR_URI . '/assets/css/additional.css', array(), filemtime(get_template_directory() . '/assets/css/additional.css'), 'all');

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap', array(), THEME_VERSION, 'all');

	wp_register_style('wallet-main-style', THEME_DIR_URI . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');

	wp_register_style('wallet-slick-style', THEME_DIR_URI . '/assets/plugins/slick/slick.css', array(), filemtime(get_template_directory() . '/assets/plugins/slick/slick.css'), 'all');
	wp_register_style('wallet-font-awsome', THEME_DIR_URI . '/assets/plugins/font-awesome/fontawesome.min.css', array(), filemtime(get_template_directory() . '/assets/plugins/font-awesome/fontawesome.min.css'), 'all');
	wp_register_style('wallet-font-awsome-brands', THEME_DIR_URI . '/assets/plugins/font-awesome/brands.css', array(), filemtime(get_template_directory() . '/assets/plugins/font-awesome/brands.css'), 'all');
	wp_register_style('wallet-font-awsome-solid', THEME_DIR_URI . '/assets/plugins/font-awesome/solid.css', array(), filemtime(get_template_directory() . '/assets/plugins/font-awesome/solid.css'), 'all');

	// can use condition
	wp_enqueue_style('wallet-additional-style');
	wp_enqueue_style('wallet-main-style');
	wp_enqueue_style('wallet-slick-style');
	wp_enqueue_style('wallet-font-awsome');
	wp_enqueue_style('wallet-font-awsome-brands');
	wp_enqueue_style('wallet-font-awsome-solid');
}

add_action('wp_enqueue_scripts', 'wallet_load_styles');

/**
 * Register js scripts.
 */
function wallet_load_scripts()
{
	wp_register_script('wallet-jquery', THEME_DIR_URI . '/assets/plugins/jquery/jquery.min.js', array(), filemtime(get_template_directory() . '/assets/plugins/jquery/jquery.min.js'), true);
	wp_register_script('wallet-bootsrapt-js', THEME_DIR_URI . '/assets/plugins/bootstrap/bootstrap.min.js', array('wallet-jquery'), filemtime(get_template_directory() . '/assets/plugins/bootstrap/bootstrap.min.js'), true);
	wp_register_script('wallet-slick-js', THEME_DIR_URI . '/assets/plugins/slick/slick.min.js', array('wallet-jquery'), filemtime(get_template_directory() . '/assets/plugins/slick/slick.min.js'), true);
	wp_register_script('wallet-scroll', THEME_DIR_URI . '/assets/plugins/scrollmenu/scrollmenu.min.js', array('wallet-jquery'), filemtime(get_template_directory() . '/assets/plugins/scrollmenu/scrollmenu.min.js'), true);

	wp_register_script('wallet-main-js', THEME_DIR_URI . '/assets/js/script.js', array('wallet-jquery'), filemtime(get_template_directory() . '/assets/js/script.js'), true);

	wp_enqueue_script('wallet-jquery');
	wp_enqueue_script('wallet-bootsrapt-js');
	wp_enqueue_script('wallet-slick-js');
	wp_enqueue_script('wallet-scroll');
	wp_enqueue_script('wallet-main-js');
}

add_action('wp_enqueue_scripts', 'wallet_load_scripts');

/**
 * Register editor styles.
 */
function wallet_add_editor_styles()
{
	add_theme_support('editor-styles');

	add_editor_style(THEME_DIR_URI . '/assets/css/additional.css');

	add_editor_style('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap');

	add_editor_style(THEME_DIR_URI . '/assets/css/style.css');

	add_editor_style(THEME_DIR_URI . '/assets/plugins/slick/slick.css');
	add_editor_style(THEME_DIR_URI . '/assets/plugins/font-awesome/fontawesome.min.css');
	add_editor_style(THEME_DIR_URI . '/assets/plugins/font-awesome/brands.css');
	add_editor_style(THEME_DIR_URI . '/assets/plugins/font-awesome/solid.css');

	// add_editor_style("wallet-jquery", THEME_DIR_URI . "/assets/plugins/jquery/jquery.min.js", [], filemtime(get_template_directory() . "/assets/plugins/jquery/jquery.min.js"), true);
	// add_editor_style("wallet-bootsrapt-js", THEME_DIR_URI . "/assets/plugins/bootstrap/bootstrap.min.js", ["wallet-jquery"], filemtime(get_template_directory() . "/assets/plugins/bootstrap/bootstrap.min.js"), true);
	// add_editor_style("wallet-slick-js", THEME_DIR_URI . "/assets/plugins/slick/slick.min.js", ["wallet-jquery"], filemtime(get_template_directory() . "/assets/plugins/slick/slick.min.js"), true);
	// add_editor_style("wallet-scroll", THEME_DIR_URI . "/assets/plugins/scrollmenu/scrollmenu.min.js", ['wallet-jquery'], filemtime(get_template_directory() . "/assets/plugins/scrollmenu/scrollmenu.min.js"), true);
	// add_editor_style("wallet-main-js", THEME_DIR_URI . "/assets/js/script.js", ["wallet-jquery"], filemtime(get_template_directory() . "/assets/js/script.js"), true);
}

add_action('after_setup_theme', 'wallet_add_editor_styles');
