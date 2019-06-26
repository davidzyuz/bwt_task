<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define ('zp', 'http://www.gismeteo.ua/city/daily/5093/');

function bwt_parser() {

	$remote_content = file_get_contents(zp);

	$store = fopen('./data.txt', "r+");
	fwrite($store, $remote_content);
	fclose($store);

	unset($remote_content);

	$local_content = file('./data.txt', 2);

	$html_dump = '';

	foreach($local_content as $key => $value) {

		$html_dump .= $value;
	}

	$clean_text = strip_tags($html_dump);


	// return a string with all info we need 
	$start_str = mb_strpos($clean_text, 'Погода в Запорожье');
	$end_str = mb_strrpos($clean_text, 'По ощущению'); 
	$length = $end_str - $start_str;
	$search_area = mb_substr($clean_text, $start_str, $length);
	$search_area = preg_replace('/\s+/', ' ', $search_area);
	$useful_info = explode(' ', $search_area);

	return $useful_info; // a keys we need has index 2 and 6;
}

echo '<pre>';
print_r(bwt_parser());
echo '</pre>';