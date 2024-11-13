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
                        <div class="mb-0">

                            <h2 class="mb-0" style="line-height:1.5"><?php the_title() ?></h2>

                            <span><?php the_date(); ?> at <?php the_time(); ?> <span class="mx-2">/</span> </span>

                            <p class="list-inline-item">Category :
                                <?php
                                $postcat = get_the_category($post->ID);

                                if (! empty($postcat)) {
                                    foreach ($postcat  as $nameCategory) {
                                        echo '<li class="list-inline-item">' . $nameCategory->name . ' </li> | ';
                                    }
                                }
                                ?>
                                <!-- <a href="#!" class="ml-1">Photography </a> -->
                            </p>

                            <p class="list-inline-item">Tags : <?php the_tags('<li class="list-inline-item">', '</li><li class="list-inline-item"> , ', '</li>'); ?>
                            </p>

                        </div>

                        <?php

                        $featuredImage = get_the_post_thumbnail_url($post, "full");

                        if ($featuredImage):

                        ?>
                            <div class="text-center">
                                <div class="post-slider rounded overflow-hidden">

                                    <div class="featured_img">

                                        <img loading="lazy" decoding="async" src="<?php echo $featuredImage ?>" class="img-fluid card-img-top mb-4 mb-md-4 mb-lg-4" alt="<?php the_title() ?>" aria-hidden="false" style="max-height:650px">

                                    </div>

                                    <!-- <img loading="lazy" decoding="async" src="images/blog/post-4.jpg" alt="Post Thumbnail">
                                <img loading="lazy" decoding="async" src="images/blog/post-5.jpg" alt="Post Thumbnail">
                                <img loading="lazy" decoding="async" src="images/blog/post-3.jpg" alt="Post Thumbnail"> -->
                                </div>
                            </div>

                        <?php endif; ?>

                        <div class="content">

                            <?php if (has_post_format('video')) : ?>

                                <style>
                                    iframe {
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        border: 0;
                                    }

                                    .featured_img,
                                    .post_tags {
                                        display: none;
                                    }
                                </style>

                                <div style="position: relative;padding-bottom: 56.25%;height: 0;overflow: hidden;">

                                    <?php the_content(); ?>

                                </div>

                            <?php else: ?>

                                <?php the_content(); ?>

                            <?php endif; ?>

                            <?php if (has_post_format('image')) : ?>

                                <style>
                                    .content {
                                        display: flex;
                                        justify-content: center;
                                    }

                                    .featured_img,
                                    .post_tags {
                                        display: none;
                                    }
                                </style>
                            <?php endif; ?>

                        </div>
                        <div class="container">
                            <div class="row position-relative">

                                <div class="col-sm-12 col-md-10 pt-1 m-auto">
                                    <div class="shadow rounded bg-white p-4 mt-4">
                                        <div class="text-center">
                                            <h5>About aurthor</h5>
                                        </div>

                                        <div class="d-block d-sm-flex align-items-center mb-3">


                                            <img loading="lazy" decoding="async" src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => 450)); ?>" alt="<?php the_author() ?>" class="img-fluid" width="65" height="66">

                                            <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">

                                                <h4 class="h5 mb-1"><?php the_author() ?></h4>

                                                <!-- <p class="mb-0">Web Designer</p> -->

                                            </div>

                                        </div>

                                        <div class="about_aurthor">

                                            <?php echo get_the_author_meta('user_description') ?>

                                            <div class="aurthor_social mt-3">

                                                <?php echo reader_get_user_social_links(); ?>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- <ul class="single_post_pagnation pagination justify-content-center">

                    <?php

                    // previous_post_link();

                    // next_post_link();

                    ?>

                </ul> -->
            </div>

            <!-- sidebar -->
            <div class="col-lg-3">

                <?php get_template_part('template-parts/sidebar/blog-page'); ?>

            </div>
        </div>
    </div>
</section>