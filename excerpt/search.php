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
<div id="post-<?php the_ID(); ?>">
	<h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<?php

the_excerpt();

?>
	<div class="meta"><abbr class="published" title="<?php the_time('c'); ?>"><?php the_time('M j, Y'); ?></abbr> &mdash; 

<?php

comments_popup_link(__('No comments', 'fave-text'), __('1 comment', 'fave-text'), __('% comments', 'fave-text'));

?>
	</div>
</div><!-- .excerpt -->