<?php
// Get the URL parameter from the request
$url = $_GET['url'];

// Fetch the content from the URL
$content = file_get_contents($url);

// Set the appropriate headers
header('Content-Type: text/html');
header('Access-Control-Allow-Origin: *');

// Output the fetched content
echo $content;
?>
