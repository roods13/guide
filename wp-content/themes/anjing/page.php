<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" class="post">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<div class="entry-content">
					<?php the_content() ?>

<?php edit_post_link(); ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>