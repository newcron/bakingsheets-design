<article class="itemdetails l-verticalaligned-item" id="post-<?php the_ID(); ?>">
    <header>
        <div class="itemdetails-time">
            <time><?php the_time( 'd.m.Y' ); ?></time>
        </div>
        <h1 class="itemdetails-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
    </header>
    <p class="itemdetails-content">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail(array(300,300), array('class' => 'itemdetails-excerpt-teaserimg'));

        }
        ?>
        <?php the_excerpt(""); ?>
    </p>
    <p class="itemdetails-readon">
        <a href="<?php the_permalink(); ?>">Weiterlesen</a>
        <?php edit_post_link(); ?>
    </p>
    <aside>
        Aus <?php the_category(", ");?>, Tags: <?php the_tags("", ", ", ""); ?>
    </aside>

</article>
