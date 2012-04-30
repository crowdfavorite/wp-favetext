<?php
// Navigate to asset root using realpath.
$abspath = realpath(dirname(__FILE__));
require_once('asset-build/lib/Bundler.php');

$bundler = Bundler::create($abspath);

$bundle_css = new Bundle('css/build.css');
$bundle_css
	->set_bundle_key('bundle-personal')
	->set_language('css')
	->add('fave-text', 'css/fave-text.css');
$bundler->push($bundle_css);

$bundle_js = new Bundle('js/build.js');
$bundle_js
	->set_bundle_key('bundle-personal')
	->set_language('javascript')
	->set_meta('dependencies', array('jquery'))
	->add('global', 'js/fave-text.js');
$bundler->push($bundle_js);
