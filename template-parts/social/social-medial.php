  <?php if (get_theme_mod('show_social_media_handles')) { ?>

      <?php if (get_theme_mod('facebook')) { ?>

          <li class="list-inline-item me-3">
              <a title="Explorer Facebook Profile" class="text-black" href="<?php echo get_theme_mod('facebook'); ?>">
                  <i class="fab fa-facebook-f"></i>
              </a>
          </li>
      <?php } ?>

      <?php if (get_theme_mod('twitter')) { ?>

          <li class="list-inline-item me-3">
              <a title="Explorer Twitter Profile" class="text-black" href="<?php echo get_theme_mod('twitter'); ?>">
                  <i class="fab fa-twitter"></i>
              </a>
          </li>

      <?php } ?>

      <?php if (get_theme_mod('instagram')) { ?>

          <li class="list-inline-item me-3">
              <a title="Explorer Instagram Profile" class="text-black" href="<?php echo get_theme_mod('instagram'); ?>">
                  <i class="fab fa-instagram"></i>
              </a>
          </li>
      <?php } ?>




      <div class="widget">
          <h4 class="widget-title"><span>Social Links</span></h4>
          <ul class="list-inline widget-social">

      

          </ul>
      </div>

  <?php } ?>