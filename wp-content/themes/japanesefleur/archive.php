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
</div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:100px; height:19px"/><br /><br />	<br /><br />	
							
		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
<?php while (have_posts()) : the_post(); ?>
					<div class="head_bg">
								<div class="table2">
									<div class="table_row2">
										<div class="left2">
											<div class="head">
												<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
Author: <?php the_author() ?>
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
								<div class="comment"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/more_bg.gif" alt="" align="top" style="margin:5px 5px 0px 0px"/><a href="<?php comments_link(); ?>">read comments (<?php comments_number('0', '1', '%', 'number'); ?>)</a></div>
							</div>
						
														<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center">Not Found</h2><br/>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
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
