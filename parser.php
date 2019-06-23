<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//require 'vendor/autoload.php';

//use GuzzleHttp\Client;

//$clinet = new Client([
//	'base_uri' => 'httpbin.org',
//	'timeout' => '2.0',
//]);

define ('zp', 'http://www.gismeteo.ua/city/daily/5093/');

// $stream = fopen(zp, "r");
$result = file('./data.txt', 2);
// fclose($stream);
$output = '';
echo '<ol>';
foreach($result as $key => $value) {
	// $output .= $key . '<br />';
	if (($key <= 420) || ($key >= 450)) {
		continue;
	}
	echo '<li>';
	print_r($key);
	print_r(strip_tags($value)) . '<br />';
	echo '</li>';
}
echo '</ol>';
/* $pattern = "/([a-z0-9]+)/is";

$newOutput = $output;
print_r(strip_tags($newOutput)); */
/* preg_match($pattern, $newOutput, $m);
echo '<pre>';
print_r($m);
echo '</pre>'; */


/* $string = 'davidzyuz@gmail.com';
preg_match('/(\S+)@([a-z0-9]+)/is', 'Привет от somebody@mail.ru', $m);
echo '<pre>';
print_r($m);
echo '</pre>'; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
</body>
</html>