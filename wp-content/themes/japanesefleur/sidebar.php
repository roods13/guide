<div class="main_left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:100px; height:267px"/>

<br /><br /><br /><br /><br /><br /><br /><br />
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Left sidebar','theme110')) ) : else : ?>	


<div class="widget_style" id="links_with_style">

<div id="rss"><center>
<a href="<?php bloginfo('rss_url'); ?>"><img style="vertical-align:middle" src="<?php bloginfo('template_url'); ?>/images/rss.jpg" alt="Subscribe to <?php bloginfo('name'); ?>" /></a></center>
</div><br /><br />
<div class="cats_head_bg">
<h2 class="h3">Pages</h2>
</div>
		<ul>
		<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
		</ul>
</div>






<div class="widget_style" id="categories">
<div class="cats_head_bg">
<h2 class="h3"><?php _e('Categories','theme110'); ?></h2>
</div>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
			</ul>
			</div>


			<div class="widget_style" id="archives">
			<div class="cats_head_bg">
<h2 class="h3"><?php _e('Archives','theme110'); ?></h2>
			</div>
			<ul>
			<?php get_archives('monthly','10','custom','<li>','</li>'); ?>
			</ul>
			</div>
					

	<div class="widget_style" id="links_with_style">
	<div class="cats_head_bg">
	<h2 class="h3">Blogroll</h2>
	</div>
	<ul>
	<?php wp_list_bookmarks('categorize=0&title_li='); ?>
	</ul>
						
	</div>








						
							<div class="widget_style" id="meta">
								<div class="cats_head_bg">
									<h2 class="h3"><?php _e('Meta','theme110'); ?></h2>
								</div>
								<ul>
															<?php wp_register('<li>', '</li>'); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
		
		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
		<?php wp_meta(); ?> 
							</ul></div>
<?php endif; ?>			<br />
				
							
						</div>
						<div class="left_2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:22px; height:1px"/></div>



