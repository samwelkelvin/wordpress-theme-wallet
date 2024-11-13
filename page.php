<?php
/**
 * 
 * Loads static page like contact,homepage,landing page etc
 * 
 * 
 */

 get_header();

 if(is_front_page()){
  
  echo '<div class="container">';
  
        if (have_posts()):
            while (have_posts()) : the_post();

                the_content();

            endwhile;
        else:
            echo '<h3>No Page data </h3>';
        endif;
  echo '</div>';


  //get_template_part('template-parts/content', 'front-page');

} elseif(is_home()){

  echo '<div class="container">';
    if (have_posts()):
      while (have_posts()) : the_post();

        the_content();

      endwhile;
    else:
      echo '<h3>No Page data </h3>';
    endif;
  echo '</div>';

  //get_template_part('template-parts/content', 'front-page');

 } else {

  //get_template_part('template-parts/content', 'page');
  echo '<div class="container">';

  if (have_posts()):
    while (have_posts()) : the_post();

      the_content();

    endwhile;
  else:
    echo '<h3>No Page data </h3>';
  endif;
  echo '</div>';

 }


 
 ?>

 <?php
 get_footer();