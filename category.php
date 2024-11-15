<?php

/**
 * Didplays  posts based on category.
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

	$current_category = get_queried_object();

	?>

    <div class="container">

        <h3 class="h3 mb-4  py-3">

           Category : <mark> <?php echo esc_html($current_category->name); ?></mark> 

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
