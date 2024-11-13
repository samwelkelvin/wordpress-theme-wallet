<?php

class Wallet_Recent_Posts extends WP_Widget
{

    /**
     * 
     * Register widget with wordpress
     * 
     */

    public function __construct()
    {
        parent::__construct(
            //base id
            "wallet_recent_posts_widget",

            //Name
            __("Wallet Recent Posts Widget", "wallet"),

            //description array);
            array("description" => __("Display recent posts in a widget", "wallet")),
        );
    }


    /****
     * 
     * Front end display
     *
     */

    public  function widget($args, $instance)
    {
        $this->getRecentPosts();
    }


    /***
     * 
     * Widget backend
     * 
     * $instance previously  saved values in database
     * 
     */

    public function form($instance)
    {

        if (isset($instance['title'])) {

            $title = $instance['title'];
        } else {

            $title = __('Recent posts', 'wallet_domain');
        }
?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>

            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>

    <?php
    }


    /***
     * 
     * sanitize widget form values as they are being saved 
     *
     * refreshes widget every time its updated
     */

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }



    /**
     * 
     * 
     * User functions
     * 
     * 
     */

    //post tags

    private function getRecentPosts()
    {

    ?>

        <div class="widget">
            <h5 class="widget-title"><span>Latest Article</span></h5>
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post_item) : ?>

                <ul class="list-unstyled widget-list">
                    <li class="d-flex widget-post align-items-center">
                        <a class="text-black" href="<?php echo get_permalink($post_item['ID']) ?>">
                            <div class="widget-post-image flex-shrink-0 me-3">
                                <img class="rounded" loading="lazy" decoding="async" src="<?php echo get_the_post_thumbnail_url($post_item['ID'], 'thumbnail') ?>" alt="Post Thumbnail">
                            </div>
                        </a>
                        <div class="flex-grow-1">
                            <h5 class="h6 mb-0"><a class="text-black" href="<?php echo get_permalink($post_item['ID']) ?>"><?php echo $post_item['post_title'] ?></a></h5>
                            <small><?php echo date("F j, Y, g:i a", strtotime($post_item['post_date'])); ?></small>
                        </div>
                    </li>
                </ul>

    <?php
            endforeach;
            echo '</div>';
        }
    }



    //registering the  widgets
    function register_wallet_recent_posts_widget()
    {
        register_widget('Wallet_Recent_Posts');
    }

    add_action('widgets_init', 'register_wallet_recent_posts_widget');
