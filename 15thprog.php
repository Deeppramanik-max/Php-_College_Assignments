<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="15thprog.php" method="post">
        <label> Enter students number </label>
        <input type = "number" name = "number" placeholder = "Enter a number" required>
        <button  type="submit"> click to see grades </button>
     </form >
</body>
</html>

<?php

$_number = $_POST['number'];

if ($_number > 800 && $_number <=1000){
    echo $_number . " is A+ grade";
}

if ($_number > 600 && $_number <=800){
    echo $_number . " is B+ grade";
}

if ($_number >= 400 && $_number <=600){
    echo $_number . " is C+ grade";
}

if ($_number < 400){
    echo $_number . " is fail";
}
?>