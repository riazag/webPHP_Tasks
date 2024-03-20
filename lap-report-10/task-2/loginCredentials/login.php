<?php
$server  = 'localhost';
$username = 'root';
$password = '';
$database = 'login_db';
 
$conn = mysqli_connect($server,$username,$password,$database);
// echo "connection done";
// database creation
 
// $query = "CREATE database `login_db`";
// $res = mysqli_query($conn,$query);
// echo "db success";

// table creation
// $tquery = "CREATE table `login` (`username` varchar(20) not NULL,`password` varchar(12) not NULL)";

// $res1 = mysqli_query($conn,$tquery);
// echo "table created";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginForm</title>
</head>
<body>
<form action="#" method = "POST">
<label for="username">username:</label>
<input type="text" name="username">
<label for="password">password:</label>
<input type="password" name="password">
<button>Login</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //fetching data from form
    $name = $_POST["username"];
    $psd = $_POST["password"];

    // insert data into database table
//    $sendToDB = "INSERT INTO `login` (`username`, `password`) VALUES ('$name', '$psd')";
//    $save = mysqli_query($conn,$sendToDB);

   // fetch data from database
   $fetch = "SELECT * from `login`";
   $retrival = mysqli_query($conn,$fetch);
   $row = mysqli_fetch_Assoc($retrival);
   if($row["username"] == "$name" && $row["password"] == "$psd")
   {
    echo "login successful";
   }
   else {
    echo "invalid username or password";
   }
}
?>  v 
</body>
</html>