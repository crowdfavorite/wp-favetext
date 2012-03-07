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
<div id="post-content-<?php the_ID() ?>" <?php post_class('hentry full') ?>>
	<h1 class="entry-title full-title"><a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title_attribute() ?>" rel="bookmark" rev="post-<?php the_ID(); ?>"><?php the_title() ?></a></h1>
	<div class="entry-content full-content">
<?php
		the_content('<span class="more-link">'.__('Continued...', 'carrington-text').'</span>'); 
		$args = array(
			'before' => '<p class="pages-link">'. __('Pages: ', 'carrington-text'),
			'after' => "</p>\n",
			'next_or_number' => 'number'
		);
		wp_link_pages($args);
?>
	</div><!--/entry-content-->
	<div class="clear"></div>
	<div class="by-line">
		<?php edit_post_link(__('Edit', 'carrington-text'), '<div class="entry-editlink">', '</div>'); ?>
		<span class="date full-date"><abbr class="published" title="<?php the_time('c'); ?>"><?php the_time('F j, Y'); _e(' at ', 'carrington-text'); the_time(); ?></abbr></span>
	</div><!--/by-line-->
</div><!-- .post -->