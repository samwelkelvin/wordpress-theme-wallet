<?php

/**
 * Didplays  posts based on tag.
 */
?>
<style>
    .section {
        padding-top: 10px !important;
    }
</style>

<?php

try {
	get_header();

	?>

    <div class="container">

        <h3 class="h3 mb-4  py-3">
            Posts with : <mark> <?php echo esc_html(single_tag_title('', false)); ?></mark> tag
        </h3>
    </div>

    <?php

		$args = array();

	// if blog layout is list or not set use list
	if (!get_theme_mod('blog-layout') || 'list' === get_theme_mod('blog-layout')) {
		get_template_part('template-parts/content/list', 'posts-template', $args);
	} else {
		get_template_part('template-parts/content/grid', 'posts-template', $args);
	}

	?>

<?php

	get_footer();
} catch (Throwable $th) {
	echo $th->getMessage();
}
