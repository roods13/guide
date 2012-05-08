            <div id="right_column">

<?php if ( is_single() ) : ?> 
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>     
		

                <div class="heading">
                	<h2><?php _e('Related Posts', 'china-red'); ?></h2>
                </div> <!--heading ends-->
				<ul>
						<?php
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
							  $first_tag = $tags[0]->term_id;
							  $args=array(
								'tag__in' => array($first_tag),
								'post__not_in' => array($post->ID),
								'showposts'=>10,
								'caller_get_posts'=>1
							   );
							  $my_query = new WP_Query($args);
							  if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
											<?php the_title(); ?> <?php comments_number(' ','(1)','(%)'); ?>
										</a> 
									</li>
								  <?php
								endwhile;
							  }
							}
						?>
				</ul>
				<div class="heading">
                	<h2><?php _e('Recent Posts', 'china-red'); ?></h2>
                </div> <!--heading ends-->
				<ul><?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('showposts=' . $limit=10 . '&paged=' . $paged);
$wp_query->is_archive = true; $wp_query->is_home = false;
?>
<?php while(have_posts()) : the_post(); if(!($first_post == $post->ID)) : ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>&nbsp;<span class="me-count"><?php comments_number('&nbsp;','(1)','(%)'); ?></span></li>
<?php endif; endwhile; ?></ul>
				
			
		
<?php endif; ?>
<?php else : ?> 

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?> <!--home sidebar begins-->               
                <div class="heading">
                	<h2><?php _e('Most Popular', 'china-red'); ?></h2>
                </div> <!--heading ends-->
				<ul class="most-comments">
					<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10");
					foreach ($result as $post) {
					setup_postdata($post);
					$postid = $post->ID;
					$title = $post->post_title;
					$commentcount = $post->comment_count;
					if ($commentcount != 0) { ?>
						<li>
							<a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a> (<?php echo $commentcount ?>)
						</li>
					<?php } } ?>
				</ul>
                
                <div class="heading">
                	<h2><?php _e('Recent Comments', 'china-red'); ?></h2>
                </div> <!--heading ends-->
				<ul>
					<?php
					$show_comments = 10;
					$i = 0;
					$comments = get_comments("number=10&status=approve");
					foreach ($comments as $comment)
					{
						$comm_post_id = $comment->comment_post_ID;
						$i++;
					?>
					<li><a href="<?php echo get_permalink($comm_post_id); ?>#comment-<?php comment_ID(); ?>"><?php comment_author(); ?></a>: <?php comment_excerpt(); ?></li>

					<?php
					if ($i >= $show_comments) break;
					}
					?>
				</ul>
				
				
			<?php endif; ?>
			<?php endif; ?>
            </div> <!--right column ends-->