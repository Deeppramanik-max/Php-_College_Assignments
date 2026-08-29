// To check the email address is valid or not 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9thprog.php" method="post">
    <label> Enter your email address </label>
    <input type="email" name="email" required>
    <input type="submit" value="Submit"> 
    </form>
</body>
</html>

<?php
$email=$_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br> $email is a valid email address.";
} else {
    echo "<br> $email is not a valid email address.";
}

?>