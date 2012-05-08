<?php get_header(); ?>

	<div id="container">
    	<div id="content">
        
        <?php if (have_posts()) : ?>
        	
            <?php while (have_posts()) : the_post(); ?>
        	<div id="post-<?php the_ID(); ?>" class="post">
            	
               <div class="entry-info"><?php the_time('Y-m-d'); ?> / <?php the_author_posts_link(); ?> / <?php comments_popup_link('No Comment','One Comment','% Comments'); ?><?php edit_post_link(' / Edit'); ?></div>
               
               <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Links to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="entry-content"><?php the_content('Continue Reading &raquo;'); ?></div>
            </div><!--.post-->
        	<?php endwhile; ?>
            
            <div class="navigation">
            	<?php wp_pagenavi(); ?>
            </div>
            
		<?php else : ?>
            
            	<h2 class="entry-title">Not Found</h2>
            	<p>Sorry, but what you are looking for isn't here...</p>
            	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
            
        <?php endif; ?>    
        </div><!--#content-->
    </div><!--#container-->
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>
