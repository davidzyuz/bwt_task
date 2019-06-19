<?php 

// bwt_test configuration here

function config($key = "")
{
	$config = array(
		'site_name' => 'bwt_test',
		'site_url' => '',
		'pretty_url' => true,
		'content_dir' => 'content',
		'template_dir' => 'template',
		'nav_menu' => [
			'Home' => 'home.php',
			'Login' => 'login.php',
			'Feedback' => 'feedback.php',
			'Comments' => 'comments.php',
			'404' => '404.php'
		],
	)

	return isset($config[$key]) ? $config[$key] : null;
}