<?php
$url = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";

$parsed_url = parse_url($url);

echo "<b>Scheme:</b> " . $parsed_url['scheme'] . "<br>";
echo "<b>Host:</b> " . $parsed_url['host'] . "<br>";
echo "<b>Path:</b> " . $parsed_url['path'] . "<br>";
?>