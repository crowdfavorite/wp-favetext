<?php

// This file is part of the Carrington Text Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
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

global $comment;

?>
<div id="comment-<?php comment_ID(); ?>" <?php comment_class('hentry'); ?>>
	<div class="entry-content comment-content">
<?php 

comment_text();

?>
	</div><!--.entry-content-->
	<div class="clear"></div>
	<div class="meta">

<?php

edit_comment_link(__('Edit', 'carrington-text'), '<span class="comment-editlink">', '</span>');

echo '<span class="author">',comment_author_link(),'</span> &mdash; <a href="'.htmlspecialchars(get_comment_link( $comment->comment_ID )).'">',comment_date(),' @ ',comment_time(),'</a>';

?>
	</div>
</div>