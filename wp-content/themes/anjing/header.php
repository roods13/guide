<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' - '; } ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--[if IE]>
    	<style>
           #wrapper{padding:35px 30px 0;}
            #isearchform{padding:2px 0 0;}
            #isearchsubmit{position:relative;top:3px;}
            .comment-text{padding-top:13px;}
        </style>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>

<div id="header">
    <h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
    <div id="tagline"><?php bloginfo('description'); ?>...</div>
    
    <div id="topnav">
    	<ul>
        	<li <?php if(is_home()) {?>class="current_page_item"<?php } ?>><a class="home" href="<?php echo get_option('home'); ?>/" title="HomePage">Home</a></li>
            <?php wp_list_pages('title_li='); ?>
        </ul>
    </div>
    
</div><!--#header-->
    
<div id="border-box">
<div id="wrapper">
