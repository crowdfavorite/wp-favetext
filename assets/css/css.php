<?php

// This file is part of the Carrington Blog Theme for WordPress
// http://carringtontheme.com
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

define('ABSPATH', dirname(__FILE__) . '/');

$css_files = array(
	'carrington-text' => 'carrington-text.css',
);

// set default
$load = array('carrington-text');

if (!isset($_GET['type'])) {
	$_GET['type'] = 'main';
}

switch ($_GET['type']) {
	case 'noimg':
		$load = array('typography', 'carrington-text');
		break;
	case 'main':
	default:
		// use default
		break;
}

ob_start("ob_gzhandler");

header('Content-type: text/css');
header("Cache-Control: public");
// cache for 1 day
header('Expires: '.gmdate('D, d M Y H:i:s', time() + 86400) . 'GMT'); 

foreach ($load as $file) {
	include(ABSPATH.$css_files[$file]);
	echo "\n\n";
}

?>