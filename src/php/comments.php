<?php
/**
 * The Comments template
 */
if ( post_password_required() )
	return;
?>
<?php if ( have_comments() || comments_open() || pings_open() ) : ?>
<section id="comments" class="paragraph" >
	<?php
	$comments_number = \bakingsheets\getNumberOfComments();
	if ( $comments_number > 0 ) : ?>
		<ol class="comment-list">
			<?php wp_list_comments( array(
				'type'              => 'comment',
				'callback'          => '\bakingsheets\renderComments',
			) ); ?>
		</ol><!-- /comment-list -->
	</div><!-- /comments-inner -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<div class="pagination clearfix">
		<?php paginate_comments_links( array(
			'prev_text' => '&lsaquo;',
			'next_text' => '&rsaquo;',
			'type'      => 'list',
		) ); ?>
	</div><!-- /pagination -->
	<?php endif; endif;   ?>


	<?php if ( comments_open() ) {
		comment_form();
	}  ?>

	<?php if ( pings_open() ) : ?>
	<div class="trackback-url common-contents clearfix">
		<h3 id="trackback-title" class="common-title"><?php _e( 'TrackBack URL', 'chocolat' ); ?></h3>
		<p><?php trackback_url(); ?></p>
	</div>
	<?php endif; ?>
</section>
<?php endif; ?>