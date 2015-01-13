<?php
/**
Plugin Name: baking sheets theme (new)
Description: theme for baking sheets
Version: 1.0
Author: Matthias Huttar
Author URI: http://matluc.de
 */
get_header();
?>
    <main class="l-weightedcols l-contentarea">
        <section class="l-weightedcols-primary a-comfortably l-verticalaligned" >
            <?php

                while(have_posts()) {
                    the_post();
                    require "partials/postpreview.php";
                }
            ?>

            <nav class="l-verticalaligned-item navigation">
                <div class="navigation-previous"><?php next_posts_link( 'Ältere Beiträge' ); ?></div>
                <div class="navigation-next"><?php previous_posts_link( 'Neuere Beiträge' ); ?></div>
            </nav>


        </section>
        <section class="l-weightedcols-secondary">
            <?php get_sidebar(); ?>
        </section>
    </main>
<?php
get_footer();