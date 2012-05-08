
    <div id="footer">
    	<div id="footer_content" class="encadre">
			<div class="bl"></div>
			<div class="br"></div>
        	<ul>
			<li class="no_bg"><a class="top" href="#"><?php _e('Back to top', 'china-red'); ?></a></li>
				<?php wp_list_pages('sort_column=post_title&title_li=&depth=1&')?>
			</ul>
            <p> &copy; <?php _e('Copyright', 'china-red'); ?> <?php bloginfo('name');?> <?php echo date('Y');?> | <?php _e('Powered by', 'china-red'); ?> <a href="http://wordpress.org">WordPress</a><br/>
			<?php _e('Theme ', 'china-red'); ?><?php _e(' designed by ', 'china-red'); ?><a href="http://www.saywp.com/">Jinwen</a><?php _e(', valid', 'china-red'); ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 2.1</a> <?php _e('&amp;', 'china-red'); ?> <a href="http://validator.w3.org/check?uri=referer">XHTML 1.0</a></p>

    	</div> <!--footer content ends-->
    </div> <!--footer ends-->
<?php wp_footer(); ?>

</body></html>