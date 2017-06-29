<?php

if ( post_password_required() )
	return;
?>

<div id="comments" class="row comments-area">
	<div class="twelve columns">
        <div class="row">

            <?php if ( have_comments() ) : ?>

            <div class="comment-header">
                <h1 class="anton">COMMENTS</h1>
                <p class="comments-title">
                    <?php
                    printf( _n( 'There is <span style="color:#cccc00;">one thought</span> on &ldquo;%2$s&rdquo;', 'There are <span style="color:#222;">%1$s thoughts</span> on &ldquo;%2$s&rdquo;', get_comments_number() ),
                        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                    ?>
                </p>
            </div>

            <hr class="divider1-white">

            <ol class="commentlist">
                <?php wp_list_comments( array( 'style' => 'ol' ) ); ?>
            </ol><!-- .commentlist -->

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments') ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;') ); ?></div>
            </nav>
            <?php endif; // check for comment navigation ?>

            <?php // If comments are closed and there are comments, let's leave a little note.
                elseif ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :?>
                <p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
            <?php endif; ?>
        </div>

        <div class="row">

            <div class="twelve columns">
                <?php  $comments_args = array(
                    // remove "Text or HTML to be displayed after the set of comment fields"
                    'comment_notes_after' => '',
                    );

                comment_form($comments_args); ?>
            </div>
        </div>

	</div>

</div><!-- #comments .comments-area -->