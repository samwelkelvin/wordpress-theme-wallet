<?php

class Wallet_Categories extends WP_Widget
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
            "wallet_categories_widget",

            //Name
            __("Wallet Categories Widget", "wallet"),

            //description array);
            array("description" => __("Display categories in a widget", "wallet")),
        );
    }


    /****
     * 
     * Front end display
     *
     */

    public  function widget($args, $instance)
    {

        // extract($args);

        // $title = apply_filters('widget_title',$instance['title']);

        // echo $before_widget;

        // if(!empty($title)){

        //     echo $before_title . $title . $after_title;

        // }

        // echo __('wallet categories','wallet_domain');

        // echo $after_widget;

        $this->getCategories();
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

            $title = __('Categories', 'wallet_domain');
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

    private function getCategories()
    {

        $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ));

        echo '<div class="widget widget-categories">
                <h5 class="widget-title"><span>Category</span></h5>
                    <ul class="list-unstyled widget-list">';
//  <li><a href="#!">Four seasone <small class="ml-auto">(1)</small></a>
        foreach ($categories as $category) {
            $category_link = sprintf(
                '<li><a class="d-flex-" href="%1$s" alt="%2$s">%3$s' . ' <small class="ml-auto">(' . $category->count . ')</small></a></li>',
                esc_url(get_category_link($category->term_id)),
                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                esc_html($category->name)
            );

            echo  $category_link;


            // echo '<li>' . sprintf(esc_html__('Category: %s', 'textdomain'), $category_link) . '<small class="ml-auto">('. $category->count.')</small></a><li>';
            //echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
            // echo ' <small class="ml-auto">' . sprintf(esc_html__('Post Count: %s', 'textdomain'), $category->count) . '</p>';
        }

        echo "</ul></div>";
    }
}



//registering the  widgets
function wallet_register_category_widget()
{
    register_widget('Wallet_Categories');
}
add_action('widgets_init', 'wallet_register_category_widget');
