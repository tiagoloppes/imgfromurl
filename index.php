<?php
$url = $_GET['url'];

$file = file_gets_content($url);


preg_match('<img[^>]src="([^>]+)">',$file, $matches);

echo '<pre>';
print_r($matches);
?>
