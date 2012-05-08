<?php load_theme_textdomain('china-theme'); 

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="bgpng" style="background:url(http://localhost/wordpress/wp-content/themes/tema-chinablog/images/sidebar-h2.png)">',
        'after_title' => '</h2>',
    ));

?>
