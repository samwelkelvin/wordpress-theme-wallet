<?php

/***
 * 
 * Template Name: Full page theme template
 * 
 */

get_header();

    if (have_posts()):
        while (have_posts()) : the_post();

            the_content();

        endwhile;
    else:
        echo '<h3 class="text-center">No Page data </h3>';
    endif;



get_footer();
