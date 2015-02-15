<article class="itemdetails l-verticalaligned-item" id="post-<?php the_ID(); ?>">
    <header>
        <?php if(!is_page()) { ?>
            <div class="itemdetails-time">
                <time><?php the_time( 'd.m.Y' ); ?></time>
            </div>
        <?php } ?>
        <h1 class="itemdetails-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
    </header>
    <section class="itemdetails-content">
        <?php the_content(""); ?>
    </section>
    <p class="itemdetails-readon">
        <?php edit_post_link(); ?>
    </p>
    <aside>
        Aus <?php the_category(", ");?>, Tags: <?php the_tags("", ", ", ""); ?>
    </aside>
</article>
