// Write a php code to get the last occurred error in the current script
<?php
// Trigger a sample error (undefined variable)
echo $undefinedVariable;

// Get the last error
$lastError = error_get_last();

// Display the error details
if ($lastError !== null) {
    echo "<h2>Last Error Details:</h2>";
    echo "<strong>Type:</strong> " . $lastError['type'] . "<br>";
    echo "<strong>Message:</strong> " . htmlspecialchars($lastError['message']) . "<br>";
    echo "<strong>File:</strong> " . htmlspecialchars($lastError['file']) . "<br>";
    echo "<strong>Line:</strong> " . $lastError['line'] . "<br>";
} else {
    echo "No error has occurred yet.";
}
?>