<?php get_header(); ?>
	<div id="container">
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/post-shadow.png);">
				<div class="title bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/post-t.png);">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="date"><?php the_time('j') ?> <strong><?php the_time('M') ?></strong></div>
					<div class="comment-count"><?php comments_number('0', '1', '%'); ?> </div>
				</div>
				<div class="post-inner">
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="bottom bgpng">
					<div class="tags-box">
						
						<div class="tags-entry bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/tags-bg.png)">
							<ul>
								<li><?php the_tags(__('Tags:', 'china-theme'), ', ', '<br />'); ?> </li>
								<li><?php _e('Author:', 'china-theme'); ?> <?php the_author() ?></li>
								<li><?php _e('Category:', 'china-theme'); ?> <?php the_category(', ');?></li>
							</ul>
						</div>
						
						
					</div>
				</div>
			</div><!-- //post -->
			<?php endwhile;?>        	
				<div id="nav">
					<ul>
						<li><?php next_posts_link(__('&laquo; Older Entries', 'china-theme')) ?></li>
						<li><?php previous_posts_link(__('Newer Entries &raquo;', 'china-theme')) ?></li>
					</ul>
				</div>
			<?php else : ?>
				<h2>Not found</h2>
			<?php  endif; ?>
		</div><!-- / Content -->
		
		<?php get_sidebar(); ?>
	</div><!-- / container -->
    
<?php get_footer(); ?>