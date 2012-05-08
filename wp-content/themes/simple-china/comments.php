<?php // Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'china-theme'); ?></p> 
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php _e('Comments:', 'china-theme'); ?></h3>

	<ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>
	
<?php echo $gravatar = get_avatar($comment, $size="32"); ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<div class="title-comment"><cite><?php comment_author(); ?></cite> <?php _e('Says:', 'china-theme'); ?></div>
				<?php    
				/*
				//echo $gravatar = get_avatar( get_comment_author_email() , $size = '64');
				$default_avatar='http://www.alexander-tumanov.name/wp-content/uploads/2009/08/vitas6632_995210.jpg';
				echo $comment;
				echo $gravatar = get_avatar($comment, $size="32", $default_avatar); 
				
				if (function_exists('get_avatar')) {
				 	//2.5 code
					 $gravatar = get_avatar( 'tumanob@gmail.com' , $size = '64');
					 $gravatar = $comment ;//'25';
				 } else {
				 	//alternate gravatar code for < 2.5
					 $gravatar = '0';
				 }
				echo "!!!-".$gravatar."-!!!";   
*/
				?>
			<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.', 'china-theme'); ?></em>
			<?php endif; ?>
			<div class="commentmetadata"><b><?php comment_date('jS F, Y') ?> <?php _e('at', 'china-theme'); ?> <?php comment_time() ?></b> <?php edit_comment_link(__('edit', 'china-theme'),'&nbsp;&nbsp;',''); ?></div>

			<?php comment_text() ?>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.', 'china-theme'); ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php _e('Add comments:', 'china-theme'); ?></h3>

<div id="cancel-comment-reply"> 
	<small><?php cancel_comment_reply_link() ?></small>
</div> 

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'china-theme'), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'china-theme'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'china-theme'); ?>"><?php _e('Log out &raquo;', 'china-theme'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><?php _e('Name', 'china-theme'); ?> <?php if ($req) _e("(required)", "china-theme"); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><?php _e('Mail (will not be published)', 'china-theme'); ?> <?php if ($req) _e("(required)", "china-theme"); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website', 'china-theme'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>', 'china-theme'), allowed_tags()); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'china-theme'); ?>" />
<?php comment_id_fields(); ?> 
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
