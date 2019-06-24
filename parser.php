<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define ('zp', 'http://www.gismeteo.ua/city/daily/5093/');

//$remote_content = file_get_contents(zp);


// $store = fopen('./data.txt', "r+");
// fwrite($store, $remote_content);
// fclose($store);

//unset($remote_content);

$local_content = file('./data.txt', 2);

$dirty_output = '';

foreach($local_content as $key => $value) {
	// $output .= $key . '<br />';
	$dirty_output .= $value;
}

$clean_output = strip_tags($dirty_output);
// return a string with all info we need 
$start_str = strpos($clean_output, 'Погода в Запорожье');
$end_str = strrpos($clean_output, 'Завтра'); 
$length = $end_str - $start_str;
$search_area = substr($clean_output, $start_str, $length);
echo $search_area;

// print_r(htmlspecialchars($output));
/* $pattern = '/([а-я]+)/';//|(\+\d+\.\d+|\+\d+)

mb_ereg($pattern, $output, $m);
echo '<pre>';
print_r($m);
echo '</pre>'; */