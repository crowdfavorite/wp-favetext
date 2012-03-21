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

$blog_desc = get_bloginfo('description');
(is_home() && !empty($blog_desc)) ? $title_description = ' - '.$blog_desc : $title_description = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name'), 1 ).$title_description; ?></title>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington-text' ), esc_html( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'carrington-text' ), esc_html( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>

	<!--[if lt IE 7]>
	<style>	#content { margin-left: 20px; margin-right: 20px; } #developer-link a, #footer p#developer-link a:visited { background-image: url(<?php echo get_template_directory_uri() ?>/img/by-crowd-favorite.png); } </style>
	<![endif]-->

<?php
	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<p id="top"><a id="to-content" href="#content"><?php _e( 'Skip to content', 'carrington' ); ?></a></p>
	<div id="header">
		<strong id="blog-title"><a href="<?php echo home_url(/) ?>" title="Home" rel="home"><?php bloginfo('name') ?></a></strong>
		<p id="blog-description"><?php bloginfo('description'); ?></p>
	</div><!-- #header -->
