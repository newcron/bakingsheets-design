<?php
get_header();
?>
    <main class="l-weightedcols l-contentarea">
        <section class="l-weightedcols-primary a-comfortably l-verticalaligned" >
            <?php

            the_post();
            require "partials/post.php";

            ?>
        </section>
        <section class="l-weightedcols-secondary">
            <?php get_sidebar(); ?>
        </section>
    </main>
<?php
get_footer();