<?php


    add_theme_support('post-thumbnails');

    set_post_thumbnail_size( 300, 300, true );
    add_image_size( 'post_thumbnail', 700, 350, true );

    register_nav_menus(array(
        'globalnav' => __('Global Navigation', 'bakingsheets')
    ));


    function bakingsheetsInitWidgets() {
        register_sidebar(array(
            'name' => "Sidebar Widget",
            'id' => 'bakingsheets_sidebar_widget',
            'description' => 'Widgets in this area will be shown at the position that has been set for "Sidebar settings" of theme options (right-hand or left-hand side).',
            'before_widget' => '<section class="a-centered menubox l-verticalaligned-item">',
            'after_widget' => '</div></section>',
            'before_title' => '<h3 class="menubox-head">',
            'after_title' => '</h3><div class="menubox-content">',
        ));

    }

    add_action( 'widgets_init', 'bakingsheetsInitWidgets' );


    function printAssetUri($uri)
    {
        echo get_template_directory_uri() . "/" . $uri;
    }


