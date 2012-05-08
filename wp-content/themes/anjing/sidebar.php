<div id="sidebar" class="sidebar">

	<p id="rssfeed">
    	<a class="postfeed" href="<?php bloginfo('rss2_url'); ?>" title="RSS">rss feed</a> <a class="cmtfeed" href="<?php bloginfo('comments_rss2_url') ?>" title="Comments Feed">comments rss</a>
    </p>
		
	<form id="isearchform" method="get" action="<?php bloginfo('home') ?>">
                <div>
                <input id="is" name="s" class="text-input" type="text" value="<?php the_search_query() ?>" size="10" tabindex="1" accesskey="S" />
                <input id="isearchsubmit" class="submit-button" name="searchsubmit" type="submit" value="search" tabindex="2" />
                </div>
    </form>

		<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin sidebar widgets ?>
         
    		<li id="pages">
				<h4>Pages</h4>
				<ul>
<?php wp_list_pages('title_li=&sort_column=post_title' ) ?>
				</ul>
			</li>

			<li id="categories">
				<h4>Categories</h4>
				<ul>
<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 

				</ul>
			</li>
            
            <li id="archives">
				<h4>Archives</h4>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
			</li>

			<li id="rss-links">
				<h4>RSS Feeds</h4>
				<ul>
					<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(bloginfo('name'), 1) ?> Posts RSS feed" rel="alternate" type="application/rss+xml">All posts</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(bloginfo('name'), 1) ?> Comments RSS feed" rel="alternate" type="application/rss+xml">All comments</a></li>
				</ul>
			</li>

			<li id="meta">
				<h4>Meta</h4>
				<ul>
					<?php wp_register() ?>
					<li><?php wp_loginout() ?></li>
					<?php wp_meta() ?>
				</ul>
			</li>
		
<?php endif; // end sidebar widgets  ?>
		</ul>
		
</div> <!-- #sidebar .sidebar -->