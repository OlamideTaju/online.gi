<?php

$host = "localhost:3000";
$root = "root";

$con = mysqli_connect($host, $root);

if($con){
    echo "Connection Successful";
}

else{
    echo "Failed to connect";
}

mysqli_select_db($con,"olamide");
 $name = $_POST["name"];
 $email = $_POST["email"];
 $number = $_POST["number"];
 
$query = "insert into students(name, email, number) values ('$name', '$email', '$number')";
mysqli_query($con, $query)

?>