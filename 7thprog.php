// simple php script to check whether the page is called from https or http
<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    echo " <br>The page is called from HTTPS.";
} else {
    echo "<br>The page is called from HTTP.";
}
?>