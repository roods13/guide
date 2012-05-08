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
</div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:100px; height:18px"/>
							
	<br /><br />	<br /><br />						
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="head_bg">
<div class="table2">
<div class="table_row2">
<div class="left2">
<div class="head">
												<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
Posted by <?php the_author() ?> in <?php the_category(', ') ?>
											</div>
</div>
<div class="right2">
<div class="date"><?php the_time('m jS, Y') ?></div>
</div>
</div>
</div>
</div>
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hr.gif" alt="" align="top" style="margin:6px 0px 0px 0px"/>
<div class="content_txt">
<?php the_content('Read the rest of this entry &raquo;'); ?><br/><br/>
<div class="comment">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/more_bg.gif" alt="" align="top" style="margin:2px 2px 0px 0px"/>

<a href="<?php comments_link(); ?>">read comments (<?php comments_number('0', '1', '%', 'number'); ?>)</a></div>
</div>
							
<?php endwhile; ?>
<?php else : ?>
<div class="content_txt" style="padding:13px 10px 10px 3px; line-height:1.31em ">
<h2>Not Found</h2><br/>
		<p class="center">Sorry, but you are looking for something that isn't here.</p><br/>


</div>
	<?php endif; ?>
<?php if (function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi(); ?>
<?php else : ?>
<?php next_posts_link('&laquo; Older Entries'); ?> 
<?php previous_posts_link('Newer Entries &raquo;'); ?>

<?php endif; ?>

							
	</div>
				
				
						
<div class="right_1"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:71px; height:1px"/></div>
		</div>
		</div>





	<?php get_footer(); ?>
		</div>
		</div></div>
</body>
</html>
