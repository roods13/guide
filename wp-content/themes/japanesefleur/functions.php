<?

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => __('Left sidebar','theme110'),
		'before_widget' => '<div id="%1$s" class="widget_style">', 
		'after_widget' => '</div>', 
		'before_title' => '<div class="cats_head_bg"><h2 class="h3">',
		'after_title' => '</h2></div>',
	));

// Links
function widget_links_with_style() {
   global $wpdb;
   $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
   foreach ($link_cats as $link_cat) {
	 ?>
	<div id="links_with_style" class="widget_style">
							<div class="cats_head_bg">
									<h2 class="h3">Blogroll</h2>
								</div>
						<ul>
							
<?php wp_list_bookmarks('categorize=0&title_li='); ?>
</ul>
							
							</div>
   <?php } ?>
   
	 	
	
// Search 	
	function widget_theme110_search() {
?>
						<div id="search_txt">
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>
						</div>
						
					
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_theme110_search');


   
   
?>
