<?php
	if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
		die ( 'Please do not load this page directly. Thanks!' );
?>
			<div id="comments">
<?php
	$req = get_option('require_name_email');
	if ( !empty($post->post_password) ) :
		if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
?>
				<div class="nopassword">This post is protected. Enter the password to view any comments.</div>
			</div><!-- .comments -->
<?php
		return;
	endif;
endif;

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
	
?>
<?php if ( $comments ) : ?>

<?php /* numbers of pings and comments */
$ping_count = $comment_count = 0;
foreach ( $comments as $comment )
	get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
?>
<?php if ( $comment_count ) : ?>

				<div id="comments-list" class="comments">
					<h3><?php printf($comment_count > 1 ? __('<span>%d</span> Comments:') : __('<span>1</span> Comment'), $comment_count) ?></h3>

					<ol>
<?php foreach ($comments as $comment) : ?>
<?php if ( get_comment_type() == "comment" ) : ?>
						<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
							<div class="comment-text">
                                
                            <p class="moderation"><?php if ($comment->comment_approved == '0') echo('(Your comment is awaiting moderation)'); ?></p>
                            <?php comment_text() ?>
                            </div>
                            
                            <div class="comment-meta">
                            <p class="cmt-author"><?php comment_author_link() ?></p>
							<?php echo get_avatar( $comment, 60 ); ?>
							<?php comment_date('Y.m.d'); ?><br /><?php comment_time(); ?><br /><?php edit_comment_link('Edit'); ?><p class="iclear"></p>
                            </div>
                            <div class="iclear"></div>
						</li>
                        
<?php /* Changes every other comment to a different class */ $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
                        
<?php endif; /* if ( get_comment_type() == "comment" ) */ ?>
<?php endforeach; ?>

					</ol>
                    
				</div><!-- #comments-list .comments -->

<?php endif; /* if ( $comment_count ) */ ?>

<?php if ( $ping_count ) : ?>

				<div id="trackbacks-list" class="comments">
					<h3><?php printf($ping_count > 1 ? '%d Trackbacks' : '1 Trackback', $ping_count) ?></h3>

					<ol>
<?php foreach ( $comments as $comment ) : ?>
<?php if ( get_comment_type() != "comment" ) : ?>

						<li id="comment-<?php comment_ID() ?>">
							<?php comment_author_link(); ?>
<?php if ($comment->comment_approved == '0') echo('<i>Your trackback is awaiting moderation.</i>\n'); ?>
						</li>
<?php endif /* if ( get_comment_type() != "comment" ) */ ?>
<?php endforeach; ?>

					</ol>
				</div><!-- #trackbacks-list .comments -->

<?php endif /* if ( $ping_count ) */ ?>
<?php endif /* if ( $comments ) */ ?>
<?php if ( 'open' == $post->comment_status ) : ?>
				<div id="respond">
                
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
					<p id="login-req">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

<?php else : ?>
					<div class="formcontainer">	
						<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

<?php if ( $user_ID ) : ?>
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
<?php else : ?>

							<p id="comment-notes">Your email will <i class="required">never</i> published nor shared. Required fields are marked <span class="required">*</span>...</p>

							<p><input id="author" name="author" type="text" value="<?php echo $comment_author ?>" size="30" maxlength="20" tabindex="3" /><label for="author">Name</label><?php if ($req) echo('<span class="required">*</span>') ?></p>

							<p><input id="email" name="email" type="text" value="<?php echo $comment_author_email ?>" size="30" maxlength="50" tabindex="4" /><label for="email">E-mail</label> <?php if ($req) echo('<span class="required">*</span>') ?></p>

							<p><input id="url" name="url" type="text" value="<?php echo $comment_author_url ?>" size="30" maxlength="50" tabindex="5" /><label for="url">Website</label></p>

<?php endif /* if ( $user_ID ) */ ?>

							<p>Type your comment out:</p>
							<p><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea></p>

							<p><input id="submit" name="submit" type="submit" value="Now, click to send it out" tabindex="7" accesskey="P" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

							<?php do_action('comment_form', $post->ID); ?>

						</form><!-- #commentform -->
					</div><!-- .formcontainer -->
<?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>

				</div><!-- #respond -->
<?php endif /* if ( 'open' == $post->comment_status ) */ ?>

			</div><!-- #comments -->
