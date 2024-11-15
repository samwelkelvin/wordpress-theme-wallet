<?php
/**
 * Config file.
 */
define('THEME_VERSION', wp_get_theme()->get('Version'));
define('THEME_NAME', wp_get_theme()->get('Name'));
define('THEME_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());
define('THEME_PATH', get_template_directory());
define('THEME_ASSETS', THEME_DIR . '/assets');
define('THEME_DIR_URI', get_stylesheet_directory_uri());

// Allow uploads of SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;
	if ('4.7.1' !== $wp_version) {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return array(
		'ext' => $filetype['ext'],
		'type' => $filetype['type'],
		'proper_filename' => $data['proper_filename'],
	);
}, 10, 4);

function reader_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}
add_filter('upload_mimes', 'reader_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}

add_action('admin_head', 'fix_svg');
