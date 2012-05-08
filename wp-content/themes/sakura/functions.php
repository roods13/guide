<?php

if ( function_exists('register_sidebars') )
	register_sidebar(array(
	'before_widget' => '<div class="sidebar-box">',
	'after_widget' => '</div><!-- end .sidebar-box -->',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));



function widget_sakura_search($args) {?>

<?php 
	extract($args);
	$options = get_option('widget_sakura_search');
	echo $before_widget;
	if( $options['title']) echo $before_title
	. $options['title']
	. $after_title; ?>

	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		</div>
	</form>

<?php echo $after_widget; ?>

<?php }

function widget_sakura_search_control(){
    $options = $newoptions = get_option('widget_sakura_search');
    if ( !is_array($options) )
    $options = array('title'=>'');

    if( $_POST["sakura-search-submit"]){
        $newoptions['title'] = strip_tags(stripslashes($_POST["sakura-search-title"]));
        // If no title provided, default to "Search".
        if( empty( $newoptions["title"]))
        $newoptions["title"] = __("Search");
    }

    if ( $options != $newoptions ) {
        $options = $newoptions;
        update_option('widget_sakura_search', $options);
    }

	$title = htmlspecialchars( $options['title'], ENT_QUOTES ); ?>
	
	<p>
		<label for="sakura-search-title">
		<?php _e('Title:'); ?> 
		<input style="width: 250px;" id="optin-title" name="sakura-search-title" type="text" value="" />
		</label>
	</p>
    
		<input type="hidden" id="optin-submit" name="sakura-search-submit" value="1" />

<?php }

if ( function_exists('register_sidebar_widget') ){
    register_sidebar_widget(__('Search'), 'widget_sakura_search');
    register_widget_control(__('Search'), 'widget_sakura_search_control', 300, 200);
}
?>