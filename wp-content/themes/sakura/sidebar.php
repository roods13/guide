	<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
		

			<div class="sidebar-box">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div><!-- end .sidebar-box -->

			<div class="sidebar-box">
				<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
            </div><!-- end .sidebar-box -->

			<?php if ( function_exists('wp_tag_cloud') ) : ?>
			<div class="sidebar-box">
				<h2>Tags</h2>
				<ul>
				<?php wp_tag_cloud('smallest=8&largest=22'); ?>
				</ul>
			</div><!-- end .sidebar-box -->
			<?php endif; ?>

			<div class="sidebar-box">
				<h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div><!-- end .sidebar-box -->
            
            
			<div class="sidebar-box">
				<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
            </div><!-- end .sidebar-box -->
            

            <div class="sidebar-box">
				<?php wp_list_bookmarks(); ?>
            </div><!-- end .sidebar-box -->

				<div class="sidebar-box">
					<h2>Meta</h2>
						<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
						</ul>
				</div><!-- end .sidebar-box -->

		
<?php endif; ?>
</div><!-- end #sidebar -->

<div class="clear"></div>

