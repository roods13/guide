<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('browser',get_template_directory_uri() . '/js/jquery.browser.min.js',array('jquery'));?>
	<?php wp_head(); 
	?>
</head>
<body>

<div id="wrapper">
	<div id="header">
		<div id="head">
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head1.png)"></div>
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head2.png)"></div>
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head3.png)"></div>
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head4.png)"></div>
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head5.png)"></div>
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head6.png)"></div>
			<div class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/head7.png)">
				<div id="mainmenu">
					<ul>
						<?php wp_nav_menu(array( 'theme_location' => '', 'menu_class' => 'listMenu') ); ?>
					</ul>
				</div>
			</div>
		</div>		
		<div id="logo">
			<div id="logo-inner" class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/logo.png)">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</div>
			<div id="logo-r" class="bgpng" style="background:url(<?php bloginfo('template_url'); ?>/images/logo-r.png);">&nbsp;</div>
		</div>
		<a id="feed" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'china-theme'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" /></a>
	
	</div><!-- / Header-->
    	<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<div class="breadcrump">','</div>');
} ?>
    <script type="text/javascript">
	jQuery(document).ready( function($) {
		//alert($.browser.name);
		//fix footer background place
		function fix_footer(idDiv, indice, entier){
			
			if(entier==false){
				var heightWrapper = ($('#'+idDiv).height()/4).toString();
				while(heightWrapper.substring((heightWrapper.length -2 ), heightWrapper.length) != indice){
					$('#'+idDiv).height($('#'+idDiv).height()+1);
					heightWrapper = ($('#'+idDiv).height()/4).toString();
				}
			}
			else{
				var heightWrapper = ($('#'+idDiv).height()%4);
				while(heightWrapper != 0){
					$('#'+idDiv).height($('#'+idDiv).height()+1);
					heightWrapper = ($('#'+idDiv).height()%4);
				}
			}
			
			
		}
		//alert(16%4);
		var indice = 25;
		if($.browser.name == 'chrome'){
			indice = 75;
		}
		else if($.browser.name == 'safari'){
			indice = '.5';
		}
		fix_footer('wrapper', indice, false);
		fix_footer('footer_body', true);
		
		//end fix footer background place
		
		$('.listMenu li').mouseenter(function(){
			if(!$(this).parent().hasClass('sub-menu')){
				$(this).children('.sub-menu').slideDown(function(){
				   $(this).stop();
				 });
				$(this).children('a:first').css({
					'color':'#f9f2e0'
					});
			}
			if(!$(this).parent().hasClass('sub-menu')){
				$(this).addClass('hoverTopMenu');
			}
		});
		
		$('.listMenu li').mouseleave(function(){
			if(!$(this).parent().hasClass('sub-menu')){
				
				if($(this).children().hasClass('sub-menu')){
				
					var top_menu_link = $(this);
					
					$(this).children('.sub-menu').slideUp(function(){
					  top_menu_link.removeClass('hoverTopMenu');
					  top_menu_link.children('a:first').css({
						'color':'#680d00'
						});
					 });
					 
					
				}
				else{
					$(this).removeClass('hoverTopMenu');
					$(this).children('a:first').css({
						'color':'#680d00'
						});
				}
				
				
			}
			
		});
 	});
    </script>