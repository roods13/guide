<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<h2 class="arc-title">Author Archives: <?php the_author(); ?></h2>

<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="post">
				<div class="entry-info">TAG&raquo; <?php the_tags('',', ',''); ?></div>
                
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Links to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
				<div class="entry-content">
                	<?php the_excerpt('Read the rest &raquo;'); ?>
				</div>
                
			</div><!-- .post -->

<?php endwhile; ?>

			<div class="navigation">
            	<?php wp_pagenavi(); ?>
            </div>
	
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>