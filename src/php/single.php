<?php
get_header();
?>
    <main class="l-weightedcols l-contentarea">
        <section class="l-weightedcols-primary a-comfortably l-verticalaligned" >
            <?php

                while(have_posts()) {
                    the_post();
                    require "partials/post.php";
                }


                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $orig_post = $post;

                    $tag_ids = array();
                    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    $args=array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>4, // Number of related posts to display.
                        'caller_get_posts'=>1
                    );

                    $my_query = new wp_query( $args );
                        echo '<h3>Vielleicht auch interessant...?</h3>';
                        echo '<ul class="l-horizontalaligned">';

                        while( $my_query->have_posts() ) {
                            $my_query->the_post();

                            ?>

                            <li class="a-quartered l-horizontalaligned-item articletile">
                                <a rel="external" href="<?php the_permalink()?>">
                                    <?php the_post_thumbnail(array(150,100)); ?><br />
                                    <?php the_title(); ?>
                                </a>
                            </li>

                        <?php
                        }
                        echo '</ul>';

                    $post = $orig_post;
                    wp_reset_query();
                }
            ?>


        </section>
        <section class="l-weightedcols-secondary">
            <?php get_sidebar(); ?>
        </section>
    </main>
<?php
get_footer();