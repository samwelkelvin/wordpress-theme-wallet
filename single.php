<?php

/**
 * 
 * Didplays single blog post
 * 
 */

try {

    get_header();

    $args = [];

    if (have_posts()):
        while (have_posts()) : the_post();

            get_template_part('template-parts/content/single', 'post', $args);

        endwhile;
    else:

        echo '<h3 class"text-center">Oops ! No data.</h3>';

    endif;

    get_footer();

} catch (\Throwable $th) {

    echo $th->getMessage();
}
