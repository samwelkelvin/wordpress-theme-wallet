<footer class="section-sm bg-tertiary mt-auto">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Service</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="service-details.html">Personal loans</a>
                        </li>
                        <li class="mb-2"><a href="service-details.html">Home Equity Loans</a>
                        </li>
                        <li class="mb-2"><a href="service-details.html">Student Loans</a>
                        </li>
                        <li class="mb-2"><a href="service-details.html">Mortgage Loans</a>
                        </li>
                        <li class="mb-2"><a href="service-details.html">Payday Loans</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">About</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#!">Benefits</a>
                        </li>
                        <li class="mb-2"><a href="#!">Careers</a>
                        </li>
                        <li class="mb-2"><a href="#!">Our Story</a>
                        </li>
                        <li class="mb-2"><a href="#!">Team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Help</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="contact.html">Contact Us</a>
                        </li>
                        <li class="mb-2"><a href="faq.html">FAQs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 newsletter-form">
                <div style="background-color: #F4F4F4; padding: 35px;">
                    <h5 class="mb-4 text-primary font-secondary">Subscribe</h5>
                    <div class="pe-0 pe-xl-5">
                        <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control shadow-none bg-white border-end-0" placeholder="Email address" required>
                                <span class="input-group-text border-0 p-0">
                                    <button class="input-group-text border-0 bg-primary" type="submit" name="subscribe"
                                        aria-label="Subscribe for Newsletter"><i class="fas fa-arrow-right"></i></button>
                                </span>
                            </div>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
                            </div>
                        </form>
                    </div>
                    <p class="mb-0">Lorem ipsum dolor sit amet, rdghds consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5 text-center text-md-start">
            <div class="col-lg-4">
                <a href="/">
                    <?php
					if (function_exists('the_custom_logo')) {
						$logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($logo_id);
						if ($logo) {
							echo '<img loading="lazy" decoding="async" class="img-fluid" width="150px" src="' . $logo[0] . '" alt="Logo">';
						} else {
							echo 'Logo';
						}
					} else {
						echo 'Logo';
					}
                    ?>
                </a>
            </div>
            <?php
			$defaults = array(
				'menu' => '',
				'container' => 'div',
				'container_class' => 'col-lg-4 col-md-6 mt-4 mt-lg-0',
				'container_id' => '',
				'container_aria_label' => '',
				'menu_class' => 'list-unstyled list-inline mb-0 text-lg-center',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'WP_Bootstrap_Navwalker_Footer::fallback',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 2,
				'walker' => new WP_Bootstrap_Navwalker_Footer(),
				'theme_location' => 'footer',
			);
                    wp_nav_menu($defaults);
                    ?>
            <div class="col-lg-4 col-md-6 text-md-start mt-4 mt-md-0">
                <ul class="list-unstyled list-inline mb-0 social-icons">
                    <?php if (get_theme_mod('show_social_media_handles')) { ?>
                        <?php if (get_theme_mod('facebook')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore Facebook Profile" class="text-black" href="<?php echo get_theme_mod('facebook'); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('twitter')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore Twitter Profile" class="text-black" href="<?php echo get_theme_mod('twitter'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('instagram')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore Instagram Profile" class="text-black" href="<?php echo get_theme_mod('instagram'); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('github')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore Github Profile" class="text-black" href="<?php echo get_theme_mod('github'); ?>">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('youtube')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore Youtube Profile" class="text-black" href="<?php echo get_theme_mod('youtube'); ?>">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('linkedin')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore Linkedin Profile" class="text-black" href="<?php echo get_theme_mod('linkedin'); ?>">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('tiktok')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Explore TikTok Profile" class="text-black" href="<?php echo get_theme_mod('tiktok'); ?>">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (get_theme_mod('whatsapp')) { ?>
                            <li class="list-inline-item me-3  mb-1">
                                <a title="Chat in whatsapp" class="text-black" href="<?php echo get_theme_mod('whatsapp'); ?>">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <li class="list-inline-item me-12">
                            <a title="Social media haddles" class="text-black" href="">
                                Social media haddles
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
