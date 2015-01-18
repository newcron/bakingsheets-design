<li class="comment">
    <aside class="comment-author <?php echo $no_avatars; ?>">
        <?php echo get_avatar( $comment, 50 ); ?>
        <?php comment_author_link(); ?>
    </aside>
    <section class="comment-content">
        <section class="comment-content-bubble">
            <section class="comment-content-bubble-text">
                <?php comment_text(); ?>
            </section>
            <aside class="comment-content-bubble-extra">
                Um <time><?php comment_date(); ?> <?php comment_time(); ?></time>.
                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'chocolat' ), 'depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>
            </aside>
        </section>
    </section>
</li>