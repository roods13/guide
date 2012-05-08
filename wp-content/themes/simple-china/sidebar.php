		<div id="sidebar">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<li>
					<h2 class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/sidebar-h2.png)"><?php _e('Pages', 'china-theme'); ?></h2>
					<ul>
						<?php wp_list_pages('title_li=' ); ?>
					</ul>
				</li>
				
				<li>
					<h2 class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/sidebar-h2.png)"><?php _e('Categories', 'china-theme'); ?></h2>
					<ul>
						<?php wp_list_categories('show_count=1&title_li='); ?>
					</ul>
				</li>
				
				<li>
					<h2 class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/sidebar-h2.png)"><?php _e('Links', 'china-theme'); ?></h2>
					<ul>
						<?php wp_list_bookmarks('categorize=0&title_li=&show_description=0&orderby=rating'); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div><!-- / sidebar -->