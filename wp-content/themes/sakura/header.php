<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--[if lte IE 6]>
<link href="<?php bloginfo('template_directory'); ?>/css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if IE 7]>
<link href="<?php bloginfo('template_directory'); ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]--> 

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php wp_head(); ?>

</head>
<body>

<div id="wrapp">

	<div id="header">
		<div id="HederTitle">
	<h1>
<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
	</h1>
		<span><?php bloginfo('description'); ?></span>
		</div><!-- end #HederTitle -->

<div class="clear"></div>


<div id="BottomHeader">

	<div id="BottomHeaderWrapp">
<?php include (TEMPLATEPATH . "/custom-header.php"); ?> 
	</div><!-- end #BottomHeaderWrapp -->

<div class="clear"></div>


</div><!-- end #BottomHeader -->

	</div><!-- end #header -->

