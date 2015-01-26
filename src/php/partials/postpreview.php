<article class="itempreview l-verticalaligned-item" id="post-<?php the_ID(); ?>">
    <header>
        <div class="itempreview-time">
            <time><?php the_time( 'd.m.Y' ); ?></time>
        </div>
        <h1 class="itempreview-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
    </header>
    <p class="itempreview-excerpt">
        <?php
        if ( has_post_thumbnail() ) {
            /* $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(300,300), true, '' );

            echo "<img src=\"$src[0]\" class=\"itempreview-excerpt-teaserimg\">"; */
            the_post_thumbnail(array(300,300), array('class' => 'itempreview-excerpt-teaserimg'));

        }
        ?>
        <?php the_excerpt(""); ?>
    </p>
    <p class="itempreview-readon">
        <a href="<?php the_permalink(); ?>">Weiterlesen</a>
        <?php edit_post_link(); ?>
    </p>
    <aside>
        Aus <a href="#"><?php the_category(", ");?></a>, Tags: <?php the_tags("", ", ", ""); ?>
    </aside>

</article>
