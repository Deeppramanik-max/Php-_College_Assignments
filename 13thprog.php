<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="13thprog.php "method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>

<?php 
//even odd number
$_number = $_POST['number'];
if ($_number % 2 == 0 ){
    echo $_number . " is an even number";
}
else{
    echo $_number . " is an odd number";
}
?>