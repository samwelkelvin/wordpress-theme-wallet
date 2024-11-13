<?php

/**
 * 
 * Displays blogs are list
 * 
 */


?>
<section class="section" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="me-lg-4">
                    <div class="row gy-5">

                        <?php

                        if (have_posts()):

                            while (have_posts()) : the_post();

                                $featuredImage = get_the_post_thumbnail_url($post, "large");
                        ?>


                                <div class="col-md-6" data-aos="fade">
                                    <article class="blog-post">

                                        <!-- if there is featured image show it -->
                                        <?php if ($featuredImage) : ?>

                                            <div class="post-slider slider-sm rounded slick-initialized slick-slider">

                                                <!-- <button type="button" class="prevArrow slick-arrow" style="">
                                                <i class="fas fa-angle-left"></i>
                                            </button> -->

                                                <div class="slick-list draggable mb-3">

                                                    <div class="slick-track" style="opacity: 1; /*width: 2268px;transform: translate3d(-972px, 0px, 0px);*/ display:block;height: 350px;">

                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                                            <img loading="lazy" decoding="async" src="<?php echo $featuredImage ?>" alt="<?php the_title(); ?>" class="slick-slide slick-cloned w-100" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="max-width: 100%;height: 100%;">

                                                        </a>


                                                    </div>

                                                </div>
                                                <!-- <button type="button" class="nextArrow slick-arrow" style="">
                                                <i class="fas fa-angle-right"></i>
                                            </button> -->

                                            </div>

                                        <?php endif; ?>

                                        <div class="mb-0">

                                            <span>
                                                <span class="card-meta-author">
                                                    <?php //echo get_avatar(get_the_author_meta('ID')); 
                                                    ?>
                                                </span>
                                                <?php echo get_the_author_posts_link(); ?> (<?php echo get_the_author_posts(); ?> Posts)
                                                <span class="mx-2">/</span>
                                            </span>

                                            <span>
                                                <?php the_date(); ?> at <?php the_time()  ?>
                                                <span class="mx-2">/</span>
                                            </span>
                                            <!-- <p class="list-inline-item">
                                                Category : <?php
                                                            //the_category();
                                                            // $postcat = get_the_category($post->ID);

                                                            // if (! empty($postcat)) {
                                                            //     foreach ($postcat  as $nameCategory) {
                                                            //         echo '<li class="list-inline-item">' . $nameCategory->name . ' </li>';
                                                            //     }
                                                            // }
                                                            ?>
                                            </p> -->
                                            <p class="list-inline-item">
                                                Tags : <?php the_tags('<li class="list-inline-item">', '</li><li class="list-inline-item"> , ', '</li>'); ?>
                                            </p>
                                        </div>

                                        <div class="pt-1">
                                            <h2 class="h4">
                                                <a class="text-black" href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>

                                            <?php the_excerpt(); ?>

                                            <a href="<?php the_permalink(); ?>" class="text-primary fw-bold" aria-label="Read the full article by clicking here">Read More</a>

                                        </div>

                                    </article>

                                </div>

                        <?php

                            endwhile;

                        else:

                            echo '<h3 class="text-center">No data found </h3>';

                        endif;

                        ?>


                        <div class="col-12">
                            <nav class="mt-4">
                                <!-- pagination -->
                                <nav class="mb-md-50">
                                    <ul class="pagination justify-content-center">

                                        <?php the_posts_pagination(
                                            array(
                                                'prev_text'          => __('« Previous'),
                                                'next_text'          => __('Next »'),
                                            )
                                        ); ?>

                                    </ul>
                                </nav>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>

            <!-- sidebar -->
            <div class="col-lg-3">

                <?php get_template_part('template-parts/sidebar/blog-page'); ?>

            </div>
        </div>
    </div>
</section>