<?php get_header(); ?>

<div id="content">
<div id="left_column">
<div id="tab-content-post">

 <?php if (have_posts()) : ?>

  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

   <p class="archiveh">
   		<?php
		// If this is a category archive
		if (is_category()) {
			printf( __('Archive for the &#8216;%1$s&#8217; Category', 'china-red'), single_cat_title('', false) );
		// If this is a tag archive
		} elseif (is_tag()) {
			printf( __('Posts Tagged &#8216;%1$s&#8217;', 'china-red'), single_tag_title('', false) );
		// If this is a daily archive
		} elseif (is_day()) {
			printf( __('Archive for %1$s', 'china-red'), get_the_time(__('F jS, Y', 'china-red')) );
		// If this is a monthly archive
		} elseif (is_month()) {
			printf( __('Archive for %1$s', 'china-red'), get_the_time(__('F, Y', 'china-red')) );
		// If this is a yearly archive
		} elseif (is_year()) {
			printf( __('Archive for %1$s', 'china-red'), get_the_time(__('Y', 'china-red')) );
		// If this is an author archive
		} elseif (is_author()) {
			_e('Author Archive', 'china-red');
		// If this is a paged archive
		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
			_e('Blog Archives', 'china-red');
		}
		?>
   </p>



 <ul class="applyalt">
 <?php while (have_posts()) : the_post(); ?>

 <li class="post">
 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 <p>
<span class="index-meta"><?php _e('Date: ', 'china-red'); ?><?php the_time('Y.m.d') ?> | <?php _e('Category: ', 'china-red'); ?><?php the_category(', ') ?> | <?php _e('Response: ', 'china-red'); ?><?php comments_number('0','1','%'); ?></span>
</p>
<?php the_content(__('Read the rest of this entry &raquo;', 'china-red')); ?>
</li> <!-- end #post -->

 <?php endwhile; else: ?>
  <p><strong>There has been a glitch in the Matrix.</strong><br />
  There is nothing to see here.</p>
  <p>Please try somewhere else.</p>
 <?php endif; ?>
</ul>

	<?php if(function_exists('wp_pagenavi')) : ?>
		<?php wp_pagenavi() ?>
	<?php else : ?>
				<div class="nav-left">
					<span class="nav-previous"><?php next_posts_link(__('Older posts', 'china-red')) ?></span>
					<span class="nav-next"><?php previous_posts_link(__('Newer posts', 'china-red')) ?></span>
				</div>
	<?php endif; ?>
</div>

</div> <!--left column ends-->
<?php get_sidebar(); ?>
</div> <!--content ends-->
</div> <!--wrapper ends-->
<?php get_footer(); ?>