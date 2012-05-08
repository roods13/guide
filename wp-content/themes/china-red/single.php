<?php get_header(); ?>
<div id="content">

<div id="left_column">
<div id="tab-content-post">
<div class="single-post">
 <ul>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <li class="post">
 <h2><?php the_title(); ?></h2>
<p>
<span class="index-meta"><?php _e('Date: ', 'china-red'); ?><?php the_time('Y.m.d') ?> | <?php _e('Category: ', 'china-red'); ?><?php the_category(', ') ?> | <?php _e('Tags: ', 'china-red'); ?><?php the_tags(' ', ',', ' '); ?></span>
</p>
  <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

  <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

 </li>
 </ul>
 </div>
 <?php comments_template(); ?>
   	   <div class="nav-left">
	        <span class="nav-previous-s">
			   <?php previous_post_link( ) ?>
			</span> 
			 <span class="ctr-s">|</span>
			<span class="nav-next-s">
			  <?php next_post_link( ) ?>
			</span>
	   </div>
 <?php endwhile; else: ?>
  <p><strong>There has been a glitch in the Matrix.</strong><br />
  There is nothing to see here.</p>
  <p>Please try somewhere else.</p>
 <?php endif; ?>
</div>

</div> <!--left column ends-->
<?php get_sidebar(); ?>
</div> <!--content ends-->
</div> <!--wrapper ends-->
<?php get_footer(); ?>