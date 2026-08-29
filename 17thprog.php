<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="17thprog.php" method="post">
        <label for="number">Full name </label>
        <input type="text" name="fullname" id="number" required>
        <label> Date of Birth </label>
        <input type="date" name="dob" required>
        <label> Email Id </label>
        <input type="email" name="email" required>
        <label> Mobile Number </label>
        <input type="number" name="mobile" required>
        <label> Gree to terms and conditions </label>
        <input type="checkbox" name="terms" required>
        <input type="submit" value="Check">
</body>
</html>

<?php
$fullname= $_POST['fullname'];
$dob= $_POST['dob'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
if($fullname != empty($fullname) && $dob != empty($dob) && $email != empty($email) && $mobile != empty($mobile)){
    echo "<br>Full Name: " . htmlspecialchars($fullname) . "<br>";
    echo "Date of Birth: " . htmlspecialchars($dob) . "<br>";
    echo "Email Id: " . htmlspecialchars($email) . "<br>";
    echo "Mobile Number: " . htmlspecialchars($mobile) . "<br>";
    echo "Terms and Conditions: Accepted<br>";
    echo "Registration successful!<br>";
} else {
    echo "<br>Please fill in all the required fields.";
}
?>