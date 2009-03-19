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

$blog_desc = get_bloginfo('description');
(is_home() && !empty($blog_desc)) ? $title_description = ' - '.$blog_desc : $title_description = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ).$title_description; ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington-text' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'carrington-text' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	
	<link rel="stylesheet" type="text/css" media="screen, print, handheld" href="<?php bloginfo('template_url') ?>/css/carrington-text.css" />
	
<?php
	// Javascript for threaded comments
	if (is_singular()) {
		wp_enqueue_script('comment-reply'); 
	}
	wp_head(); 
?>
</head>

<body>

<div id="page">
	<p id="top"><a id="to-content" href="#content"><?php _e( 'Skip to content', 'carrington' ); ?></a></p>
	<div id="header">
		<strong id="blog-title"><a href="<?php bloginfo('url') ?>/" title="Home" rel="home"><?php bloginfo('name') ?></a></strong>
		<p id="blog-description"><?php bloginfo('description'); ?></p>
	</div><!-- #header -->
