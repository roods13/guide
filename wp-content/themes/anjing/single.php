<?php get_header() ?>

	<div id="container">
		<div id="content">
        
<?php the_post() ?>

			<div id="post-<?php the_ID(); ?>" class="post">
				
                <div class="entry-info">TAG&raquo; <?php the_tags('',', ',''); ?></div>
                
                <h2 class="entry-title"><?php the_title(); ?></h2>
                
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
                
				<div class="entry-meta">
                <span class="icat">CATEGORY: <?php the_category(' '); ?></span> / <span class="trackback-link"><a href="<?php trackback_url(); ?>/" title="Trackback URL for your post" rel="trackback">Trackback URL</a></span><span><?php edit_post_link(' / Edit'); ?></span>
				</div>
                
                <?php if (is_single() && function_exists('st_related_posts')) { ?>
                <div id="r_posts">
                	<?php st_related_posts('number=5&include_page=false&order=data-asc&title='); ?><!--Notice: the "Related Post" function will only displayed in case you have installed the "Simple tags" Plugin. the URL is http://wordpress.org/extend/plugins/simple-tags, hmmm, sofish is always thinking about others^,^... -->
                </div>
                <?php } ?>
                
			</div><!-- .post -->

<?php comments_template(); ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>