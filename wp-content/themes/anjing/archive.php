<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

<?php if ( is_day() ) : ?>
			<h2 class="arc-title">Daily Archives: <?php the_time('F jS, Y'); ?></h2>
<?php elseif ( is_month() ) : ?>
			<h2 class="arc-title">Monthly Archives: <?php the_time('F Y'); ?></h2>
<?php elseif ( is_year() ) : ?>
			<h2 class="arc-title">Yearly Archives: <?php the_time('Y'); ?></h2>
<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
			<h2 class="arc-title">Blog Archives</h2>
<?php endif; ?>

<?php rewind_posts() ?>

<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" class="post">
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

		</div><!-- #content-->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>