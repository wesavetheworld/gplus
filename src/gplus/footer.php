</div>
<?php flush(); ?>
<footer>
	&copy; <?php echo date("Y"); ?>&nbsp;<?php bloginfo('name'); ?> - <a href="http://wordpress.org/">WordPress</a> - <a href="http://www.welefen.com/gplus-1-1-version.html" title="gplus theme designed by welefen">gplus</a>
</footer>
<?php wp_footer();?>
<?php $options = gplus_get_options();?>
<?php if (!gplus_is_ie() && !($options['not_use_ajax'])):?>
<div class="loading"><span>loading...</span></div>
<script>var pjaxHomeUrl = "<?php echo home_url();?>", pjaxTitleSuffix=" | <?php bloginfo('name'); ?>", pjaxUseStorage=<?php if ($options['not_use_storage']):?>false<?php else :?>true<?php endif;?>, pjaxCacheTime=<?php if (strlen($options['cache_time'])):echo intval($options['cache_time'])?><?php else :?>true<?php endif;?>, pjaxFx="<?php echo $options['show_fx']?>",pjaxCallback=function(){try{<?php echo ($options['callback_function'] ? $options['callback_function'] : 'SyntaxHighlighter.highlight()');?>}catch(e){}}</script>
<?php if ($options['js_framework'] == 'qwrap'):?>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/qwrap.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/qwrap.pjax.js?v=<?php echo gplus_version();?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/qwrap.gplus.js?v=<?php echo gplus_version();?>"></script>
<?php elseif($options['js_framework'] == 'kissy') :?>
<script src="http://a.tbcdn.cn/s/kissy/1.2.0/kissy.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/kissy.pjax.js?v=<?php echo gplus_version();?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/kissy.gplus.js?v=<?php echo gplus_version();?>"></script>
<?php else:?>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/jquery.pjax.js?v=<?php echo gplus_version();?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(true);?>/js/jquery.gplus.js?v=<?php echo gplus_version();?>"></script>
<?php endif;?>
<?php endif;?>
<?php if ($options['tongji_js_value']):?>
<?php if (strpos($options['tongji_js_value'], '</script>') === false):?>
<script type="text/javascript"><?php echo gplus_stripvalue($options['tongji_js_value']);?></script>
<?php else :?>
<?php echo gplus_stripvalue($options['tongji_js_value']);?>
<?php endif;?>
<?php endif;?>
</body>
</html>