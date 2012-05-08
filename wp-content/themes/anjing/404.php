<?php get_header() ?>

	<div id="container">
		<div id="content">
        
       <?php the_post() ?>

				<div id="post-0" class="noresults post">
				<h2 class="page-title">Nothing Found</h2>
				<div class="entry-content">
					<p>Sorry, but nothing matched your search criteria. I guest you may like the latest 5 posts:</p>
                    <ol>
                    <?php $my_query = new WP_Query('showposts=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
                    	<li><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_title() ?></a></li>
                    <?php endwhile; ?>
                    </ol>
                    <p>If not, Please try to take a search(or search again) with some different keywords. Can you see the searchform right on top of the blog's sidebar?</p>
                
                </div>
			</div><!-- .post -->

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>