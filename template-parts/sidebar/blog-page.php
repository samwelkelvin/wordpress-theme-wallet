    <!-- categories -->
    <style>
        .widget-list {
            max-height: 500px;
            overflow-y: auto;
        }

        .widget-archives li {
            display: flex !important;
        }

        .widget-archives a {
            margin-right: auto !important
        }

        .widget-archives a::before {
            position: relative;
            content: "#";
            color: #4FD675;
            left: 0px;
            top: 0;
        }
    </style>
    <?php

    function createSideBarWidgets()
    {

        //search form
        echo '<div class="widget">';

        echo  get_search_form();

        echo '</div>';
        
        //latest posts
        the_widget('Wallet_Recent_Posts');

        //categories
        the_widget("Wallet_Categories");

        //tags
        the_widget("Wallet_Tags");
    }



        //if no user sidebar show default
        if (is_active_sidebar('sidebar')):

            dynamic_sidebar('sidebar');

        else:

            createSideBarWidgets();

        endif;


    ?>
    <!-- Social -->
    <!-- <div class="widget">
        <h4 class="widget-title"><span>Social Links</span></h4>
        <ul class="list-unstyled list-inline mb-0 social-icons">
            <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div> -->