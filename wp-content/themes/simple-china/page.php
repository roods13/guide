<?php get_header(); ?>
	<div id="container">
    	
    	<div style="float:left;">
            <div id="leftMenu">
            	<?php
					$title = '';
					
					if(wp_list_pages('child_of='.get_the_ID().'&echo=0')){
						?>
						<div class="leftMenu_top"></div>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php
							$title = get_the_title();
										echo '<ul>';
											wp_list_pages( 'child_of='.get_the_ID().'&sort_column=post_date&sort_order=ASC&title_li=' );
										echo '</ul>';
									?>
						
						<?php endwhile;?>    
						<?php  endif; ?>
						<div class="leftMenu_bot"></div>
						<?php
					}
					elseif($post->post_parent!=0){
						$title = get_the_title($post->post_parent);
						?>
                        <div class="leftMenu_top"></div>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <?php
                                        echo '<ul>';
                                            wp_list_pages( 'child_of='.$post->post_parent.'&sort_column=post_date&sort_order=ASC&title_li=' );
                                        echo '</ul>';
                                    ?>
                        
                        <?php endwhile;?>    
                        <?php  endif; ?>
                        <div class="leftMenu_bot"></div>
                        <?php
					
						
					}
					else{
						$title = get_the_title();
					}
				?>
            </div>
            <?php get_sidebar(); ?>
        </div>
        
        
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post page bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/post-shadow.png);">
				<div class="title bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/post-t-page.png);">
                	
					<h2><?php echo $title ?>
                    <?php 
					if($post->post_parent!=0){
						echo ' >> '.get_the_title();
					}
					?>
                    </h2>
				</div>
				<div class="post-inner">
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="bottom bgpng">
				</div>
			</div><!-- //post -->
			<?php endwhile;?>        	
				<div id="nav">
					<ul>
						<li><?php previous_comments_link(); ?></li>
						<li><?php next_comments_link(); ?></li>
					</ul>
				</div>
			<?php else : ?>
				<h2>Not found</h2>
			<?php  endif; ?>
		</div><!-- / Content -->
		
		
	</div><!-- / container -->
<?php get_footer(); ?>