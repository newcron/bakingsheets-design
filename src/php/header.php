<!DOCTYPE html>
<html lang="de">
<head>
    <title>Bakingsheets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="styleguide" href="<?php echo get_template_directory_uri(); ?>/styleguide" />

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/app.js"></script>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>

    <header class="header">
        <div class="header-title">
            <hgroup class="header-title-content">
                <h1><a href="http://www.bakingsheets.de">Bakingsheets</a></h1>
                <h2>Keep calm and bake on</h2>
                <button class="header-title-menuicon" id="header-show-menu-action"></button>
            </hgroup>
        </div>
        <nav class="header-menu" id="header-menu-area">
            <?php wp_nav_menu( array(
                'container' => false,
                'items_wrap' => '<ul  class="header-menu-list" >%3$s</ul>',

                )); ?>
        </nav>

        <div class="header-bottom-bar"></div>
    </header>
