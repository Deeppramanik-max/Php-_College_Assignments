// Write the php script to get the current file name

<?php
$filename = basename(__FILE__);
echo "<br>current file name is: " . '<b>' .  $filename . '</b>';
?>