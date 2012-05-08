							<?php get_header(); ?>
							
						<?php get_sidebar(); ?>
							
							<div class="main_cent">
							<div class="co_name_bg">
								<div class="co_name">
<h1>
<a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

							</div>
							</div>
							<div class="search_bg">
								<div id="search">
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
								</div>
							</div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:100px; height:19px"/>
		<br /><br />	<br /><br />						
<?php if (have_posts()) : while (have_posts()) : the_post(); ?><div class="article">
<div class="content_txt" style="padding:13px 10px 10px 3px; line-height:1.31em ">
<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2><br/>
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>
		<div class="post" id="post-<?php the_ID(); ?>"><br /><br />
				<p class="postmetadataalt">
						This entry was posted
<?php /* This is commented, because it requires a little adjusting sometimes.
You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?> 
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
						
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.
			
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.			
						
						<?php } edit_post_link('Edit this entry.','',''); ?>
				</p>
			</div></div>
	<?php comments_template(); ?>
	</div>
		<div style="clear:both; font-size:1.91em; line-height:1.91em"><br/></div>	
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
								
					
						</div>
				
				
						
						<div class="right_1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:71px; height:1px"/></div>
					</div>
				</div>
				

				<?php get_footer(); ?>
				
			</div>
		</div>
	</div>
</body>
</html>
