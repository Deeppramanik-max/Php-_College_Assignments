// This is a simple php script to show user php IP address
<?php
echo "Full IP address: " . $_SERVER['HTTP_X_FORWARDED_FOR']; 
?>