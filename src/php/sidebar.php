<?php
/*
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&appId=1443946719181573&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
*/
?>
<div class="l-verticalaligned l-sidebaroffset">

    <section class="a-centered menubox l-verticalaligned-item">
        <h3 class="menubox-head">The &pi;-maker</h3>
        <p class="menubox-content">
            <img src="<?php echo get_template_directory_uri(); ?>/author-lowres.jpg" srcset="<?php echo get_template_directory_uri(); ?>/author-lowres.jpg 1x, <?php echo get_template_directory_uri(); ?>/author-highres.jpg 2x"><br>
            Welcome to Bakingsheets,<br/> where the cake is no lie.
        </p>
    </section>

    <section class="a-teasered menubox l-verticalaligned-item">
        <h3 class="menubox-head">Suchen</h3>
        <form class="menubox-content paragraph" method="GET">
            <input class="menubox-content-formfield" type="text" name="s" >
            <button>&raquo;</button>
        </form>
    </section>

    <section class="a-teasered menubox l-verticalaligned-item">
        <h3 class="menubox-head">Stay up to date</h3>
        <p class="menubox-content">
                <a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed"><i class="rss icon"></i></a>
                <a href="mailto:<?php bloginfo('admin_email'); ?>" title="E-Mail Kontakt"><i class="email icon"></i></a>
                <a href="https://www.facebook.com/bakingsheets.de" title="Bakingsheets auf Facebook"><i class="facebook icon"></i></a>
        </p>
    </section>

    <?php dynamic_sidebar( 'bakingsheets_sidebar_widget' ); ?>

    <section class="a-teasered menubox l-verticalaligned-item">
        <h3 class="menubox-head">Links</h3>
        <p class="menubox-content">
            <a href="http://www.koestlichundkonsorten.de/" rel="nofollow" target="_blank" title="Köstlich & Konsorten"><img alt="Köstlich & Konsorten" height="121" src="https://lh5.googleusercontent.com/-q_yZL5ls3LQ/Ui4xEcdNpgI/AAAAAAABbNw/treWmHqZIJM/s130/grau.jpg" width="130" /></a>
        </p>
    </section>

</div>
