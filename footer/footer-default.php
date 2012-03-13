<?php

// This file is part of the FaveText Theme for WordPress
//
// Copyright (c) 2008-2012 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
		<div class="clear"></div>
		<div id="footer">
<?php
if (cfct_get_option('cfct_credit') == 'yes') {
?>
			<p id="developer-link"><?php printf(__('<a href="http://crowdfavorite.com/wordpress/themes/favetext/">%s</a> by <a href="http://crowdfavorite.com" title="Custom WordPress development, design and consulting services." rel="developer designer">%s</a>', 'carrington-text'), 'FaveText', 'Crowd Favorite'); ?></p>
<?php
}
?>
			<p id="generator-link"><?php _e('Proudly powered by <a href="http://wordpress.org/" rel="generator">WordPress</a> and <a href="http://crowdfavorite.com/wordpress/carrington/">Carrington</a>.', 'carrington-text'); ?></p>
		</div><!--#footer -->
	</div><!--#page-->
	<?php wp_footer() ?>
</body>
</html>