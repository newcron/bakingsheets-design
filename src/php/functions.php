<?php
namespace {
    use bakingsheets\view\TeaserImageFilter;


    spl_autoload_register(function($className){
        $path = preg_replace("/\\\\/", "/", $className);
        $classFilename =  $path . ".php";

        if(file_exists(__DIR__."/".$classFilename)) {
            require $classFilename;
        }
    });


    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    add_theme_support('post-thumbnails');
    add_action('widgets_init', '\bakingsheets\bakingsheetsInitWidgets');
    add_filter( 'jpeg_quality', create_function( '', 'return 80;' ) );
    set_post_thumbnail_size(250, 250, true);
    add_image_size('post_thumbnail', 700, 350, true);

    add_filter( 'post_thumbnail_html', array(new TeaserImageFilter(), "filter"));


    register_nav_menus(array(
        'globalnav' => __('Global Navigation', 'bakingsheets')
    ));





}
namespace bakingsheets {
    function bakingsheetsInitWidgets()
    {
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

    function getNumberOfComments()
    {
        global $id;
        $comment_cnt = 0;
        $comments = get_approved_comments($id);
        foreach ($comments as $comment) {
            if ($comment->comment_type === '') {
                $comment_cnt++;
            }
        }
        return $comment_cnt;
    }

    function renderComments($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        $no_avatars = '';
        if (!get_avatar($comment)) {
            $no_avatars = 'no-avatars';
        }

        require("partials/singleCommentTemplate.php");
    }
}








