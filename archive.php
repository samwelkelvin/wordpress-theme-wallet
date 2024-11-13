<?php

/**
 * 
 * Didplays  posts based on Archive
 * 
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
            Archive for : <mark> <?php echo esc_html(date("F", mktime(0, 0, 0, get_query_var('monthnum'), 10)) . " " . get_query_var('year')) ?></mark> tag
        </h3>
    </div>

    <?php

    $args = [];

    //if blog layout is list or not set use list
    if (!get_theme_mod('blog-layout') || get_theme_mod('blog-layout') === 'list')

        get_template_part('template-parts/content/list', 'posts-template', $args);

    else

        get_template_part('template-parts/content/grid', 'posts-template', $args);

    ?>

<?php

    get_footer();
} catch (\Throwable $th) {

    echo $th->getMessage();
}
