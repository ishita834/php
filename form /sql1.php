<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "workshop";

$con = new mysqli($hostname, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM `phone book`";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID = " . $row["ID"] . "<br>";
        echo "Full Name : " . $row["full name"] . "<br>";
        echo "Phone Number : " . $row["phone number"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No records found.";
}

$con->close();

?>
