<?php

// main functionality here
// get site name
function get_site_name()
{
	echo config('site_name');
}

function get_site_url()
{
	echo config('site_url');
}

// nav menu generator
function nav_menu($sep = ' | ')
{
	$nav_menu = '';
	$nav_items = config('nav_menu'); //get nestet array from $config in config.php
	foreach ($nav_items as $uri => $name) {

		$class = str_replace('page=', '', $_SERVER['QUERY_STRING'])	=== $uri ? ' active' : '';
		$url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
		$nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;

	}

	echo trim($nav_menu, $sep);
}


// 
function page_title()
{
	$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
	echo ucwords(str_replace('-', ' ', $page));
}

function page_content()
{
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	$path = getcwd() . '/' . config('content_dir') . '/' . $page . '.php';

	// check if requesting path is correct
	if (! file_exists($path)) {
		$path = getcwd() . '/' . config('content_dir') . '/404.php';
	}

	echo file_get_contents($path);
}

function init()
{
	require config('template_dir') . '/template.php';
}