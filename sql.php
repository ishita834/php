<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "workshop";
$con = new mysqli($hostname,$username , $password,$dbname);
if($con){
    
    $sql = "select = from phone book";
    $result = $con->execute_query($sql);
    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
            echo "ID = ".$row["ID"].",</br>"."full name : ".$row["full name"].",</br>"."phone number : ".$row["phone number"]."</br>";
            echo "</br>";
        }
    }
}
?>