<?php

/**
 * 
 * Didplays  posts based on aurthor
 * 
 */


?>
<style>
    .author {
        padding: 0 !important;
    }

    .section {
        padding-top: 10px!important;
    }
</style>

<?php

try {

    get_header();

?>


    <div class="container py-4">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-3 col-md-4 mb-4 mb-md-0">

                <img class="author-image rounded" src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => 450)); ?>" alt="Aurthor">

            </div>
            <div class="col-md-8 col-lg-6 text-center text-md-left">
                <h3 class="mb-2"><?php the_author() ?></h3>
                <div class="content mb-4">
                    <?php echo get_the_author_meta('user_description') ?>
                </div>

                <a class="post-count mb-1" href="#"><i class="ti-pencil-alt mr-2"></i>
                    <span class="text-primary"><b> <?php echo get_the_author_posts(); ?> </b>
                    </span> Posts by this author</a>

                <?php  echo reader_get_user_social_links(); ?>

            </div>
        </div>
    </div>


    <div class="container">

        <h3 class="h3 mb-4  py-3">
            Posts by : <mark> <?php echo esc_html(get_the_author()) ?></mark>
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
