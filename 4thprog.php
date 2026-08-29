// Browser Detection script 

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'] ??'';
$browser = "Unknown Browser";
if (strpos($user_agent, 'Firefox') !== false) {
    $browser = "Mozilla Firefox";
} elseif (strpos($user_agent, 'Chrome') !== false) {
    $browser = "Google Chrome";
} elseif (strpos($user_agent, 'Safari') !== false) {
    $browser = "Apple Safari";
} elseif (strpos($user_agent, 'Opera') !== false) {
    $browser = "Opera";
} elseif (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident/7.0; rv:11.0') !== false) {
    $browser = "Internet Explorer";
}
echo "<br>You are using: " . '<b>' . $browser . '</b>';
?>