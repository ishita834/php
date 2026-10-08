<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];

    echo "Full Name: " . $fullname . "<br>";
    echo "Email Address: " . $email;

} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Q1 Form</title>
</head>
<body>

<h2>Enter Details</h2>

<form method="post" action="form.php">

    Full Name:
    <input type="text" name="fullname">
    <br><br>

    Email Address:
    <input type="email" name="email">
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>

<?php
}
?>