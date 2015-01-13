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
    <section class="itemdetails-content">
        <?php the_content(""); ?>
    </section>
    <p class="itemdetails-readon">
        <?php edit_post_link(); ?>
    </p>
</article>
