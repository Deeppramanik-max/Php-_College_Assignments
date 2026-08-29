<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Accept the name and display the name through php echo statement </h1>
    <form action="2ndprog.php" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
$name=$_POST['name'];
echo "Hello, " . htmlspecialchars($name) . "! Welcome to our website."; 
?>