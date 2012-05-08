<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" style="padding:0px 0px 0px 210px; margin:0px 0px 0px 0px">
<h2 class="h4"><input type="text"  name="s" id="s" value="<?php echo wp_specialchars($s, 1); ?>"/><input type="image" class="input" src="<?php bloginfo('stylesheet_directory'); ?>/images/search.gif" value="submit"/></h2>
					</form>