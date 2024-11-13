<!-- navigation -->
<header class="navigation bg-tertiary">
    <!--  -->



    <!--  -->

    <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
        <div class="container">
            <a class="navbar-brand" href="/">
                <?php

                if (function_exists("the_custom_logo")) {

                    $logo_id = get_theme_mod("custom_logo");

                    $logo = wp_get_attachment_image_src($logo_id);

                    if ($logo)
                        echo '<img loading="prelaod" decoding="async" class="img-fluid" width="150px" src="' . $logo[0] . '" alt="Logo">';
                    else
                        echo 'Logo';
                } else {

                    echo 'Logo';
                }

                ?>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php

                $defaults = array(
                    'menu'                 => '',
                    'container'            => 'div',
                    'container_class'      => 'collapse navbar-collapse text-center order-lg-2 order-3',
                    'container_id'         => 'navigation',
                    'container_aria_label' => '',
                    'menu_class'           => 'navbar-nav mx-auto',
                    'menu_id'              => '',
                    'echo'                 => true,
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'before'               => '',
                    'after'                => '',
                    'link_before'          => '',
                    'link_after'           => '',
                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    // 'item_spacing'         => 'preserve',
                    'depth'                => 2,
                    'walker'               => new WP_Bootstrap_Navwalker(),
                    'theme_location'       => 'primary',
                );

                wp_nav_menu($defaults);

                ?>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="how-it-works.html">How It Works</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="blog.html">Blog</a>
                            </li>
                            <li><a class="dropdown-item " href="blog-details.html">Blog Details</a>
                            </li>
                            <li><a class="dropdown-item " href="service-details.html">Service Details</a>
                            </li>
                            <li><a class="dropdown-item " href="faq.html">FAQ&#39;s</a>
                            </li>
                            <li><a class="dropdown-item " href="legal.html">Legal</a>
                            </li>
                            <li><a class="dropdown-item " href="terms.html">Terms &amp; Condition</a>
                            </li>
                            <li><a class="dropdown-item " href="privacy-policy.html">Privacy &amp; Policy</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- account btn -> <a href="#!" class="btn btn-outline-primary">Log In</a>
                <!-- account btn -> <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>
            </div> -->
        </div>
    </nav>
</header>
<!-- /navigation -->