<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$database = 'registration_db';
$conn = new mysqli($serverName,$username,$password,$database);
if($conn->connect_error)
{
    die("connection Failled : ".$conn->connect_error);
}
// getting data from form
$name = $_POST["name"];
$regno = $_POST["regno"];
$email = $_POST["email"];
 
//  Sql to get user data 

$sql = "INSERT into registration_page (name,regno,email) VALUES ('$name','$regno','$email')";

if($conn->query($sql) == true) {
    echo "new user registered successfully";
}
else {
        echo "erorr";
}
?>