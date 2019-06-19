<?php 

// bwt_test configuration here

function config($key = "")
{
	$current_dir = getcwd();
	$full_path = explode('/', $current_dir);
	$index = count($full_path) - 1;

	$config = [
		'site_name' => 'bwt_test',
		'site_url' => '',
		'pretty_uri' => true,
		'content_dir' => 'content',
		'template_dir' => 'template',
		'nav_menu' => [
			"{$full_path[$index]}" => 'Home',
			"{$full_path[$index]}/login" => 'Login',
			"{$full_path[$index]}/feedback" => 'Feedback',
			"{$full_path[$index]}/comments" => 'Comments'
		],
	];

	return isset($config[$key]) ? $config[$key] : null;
}