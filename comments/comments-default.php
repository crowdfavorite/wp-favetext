<?php

// This file is part of the Carrington Text Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
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

global $post, $wp_query, $comments, $comment;

if (have_comments() || comments_open()) {
?>

<a class="feed comment-feed" rel="alternate" href="<?php echo get_post_comments_feed_link($post->ID, ''); ?>"><?php _e('Comment Feed', 'carrington-text'); ?></a>
<h2 id="comments" class="h1 comments-title"><?php comments_number(__('No Responses (yet)', 'carrington-text'), __('One Response', 'carrington-text'), __('% Responses', 'carrington-text')); ?></h2>

<?php 

	if (!post_password_required()) {
		$comments = $wp_query->comments;
		$comment_count = 0;
		$ping_count = 0;
		foreach ($comments as $comment) {
			if (get_comment_type() == 'comment') {
				$comment_count++;
			}
			else {
				$ping_count++;
			}
		}
		if ($comment_count) {
			echo '<ol class="comments">', wp_list_comments('type=comment&callback=cfct_threaded_comment'), '</ol>';
			
			previous_comments_link();
			next_comments_link();
		}
		cfct_form('comment');
		if ($ping_count) {
?>
<h3 class="pings"><?php _e('Continuing the Discussion', 'carrington-text'); ?></h3>
<?php
			echo '<ol class="comments pings">', wp_list_comments('type=pings&callback=cfct_threaded_comment'), '</ol>';
		}
	}
}

?>