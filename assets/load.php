<?php
$url = trailingslashit(get_template_directory_uri());
define('CFCT_ASSETS_URL', $url.'assets/');

wp_enqueue_style(
	'carrington',
	CFCT_ASSETS_URL.'css/css.php',
	array(),
	CFCT_URL_VERSION
);

wp_enqueue_script('jquery');
wp_enqueue_script( 'comment-reply' );
wp_enqueue_script(
	'carrington',
	CFCT_ASSETS_URL.'js/fave-text.js',
	array('jquery'),
	CFCT_URL_VERSION
);

if (cfct_get_option('cfct_ajax_load') == 'yes') {
	cfct_ajax_load();
}
if (cfct_get_option('cfct_lightbox') != 'no') {
	wp_enqueue_script(
		'cfct_thickbox',
		$url.'carrington-core/lightbox/thickbox.js',
		array('jquery'),
		CFCT_URL_VERSION
	);
	
	wp_enqueue_style(
		'cfct_thickbox',
		$url.'carrington-core/lightbox/css/thickbox.css',
		array(),
		CFCT_URL_VERSION
	);
}

/* Additional stuff to put in wp_head */

function cfct_blog_head() {
	cfct_get_option('cfct_ajax_load') == 'no' ? $ajax_load = 'false' : $ajax_load = 'true';
	
	echo '
<script type="text/javascript">
var CFCT_URL = "'.home_url().'";
var CFCT_AJAX_LOAD = '.$ajax_load.';
</script>
	';
	
	if (cfct_get_option('cfct_lightbox') != 'no') {
		echo '
<script type="text/javascript">
tb_pathToImage = "' . get_template_directory_uri() . '/carrington-core/lightbox/img/loadingAnimation.gif";
jQuery(function($) {
	$("a.thickbox").each(function() {
		var url = $(this).attr("rel");
		var post_id = $(this).parents("div.post, div.page").attr("id");
		$(this).attr("href", url).attr("rel", post_id);
	});
});
</script>';
	}
}
add_action('wp_head', 'cfct_blog_head');
?>