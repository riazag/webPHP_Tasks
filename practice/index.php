<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method ="POST">
<label for="">Usernmae :</label>
<input type="text" name="username" id="">
<label for="">Email</label>
<input type="email" name = "email">
<label for="">password</label>
<input type="password" name ="password">
<button>sign Up</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // $createTable = "CREATE TABLE `user`.`users` (`username` VARCHAR(10) NOT NULL ,`email` VARCHAR(15) NOT NULL, `password` VARCHAR(8) NOT NULL)";
        // $tb = mysqli_query($con, $createTable);
        // echo "table created";
        
            $insert = "INSERT into `user`.`users` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";
            $ins = mysqli_query($con, $insert);
        
        //     $cookiename = 'riaz';
        //     $cookievalue = 'ffff';
        // $cookie = setcookie($cookiename, $cookievalue, time() + 3600);

        // echo $_COOKIE[$cookiename];


        // session_start();
        // $_SESSION['user'] = $username;

        // $name = $_SESSION['user'];
        // echo $name;

        // session_unset();
        // session_destroy();

        // $delete = "DELETE from `user`.`users` WHERE `username` = 'hassan'";
        // $del = mysqli_query($con,$delete);
        // echo "deleted";


        // $update = "UPDATE `user`.`users` SET `username` = 'HASSAN' Where `password` = '666'";
        // $del = mysqli_query($con,$update);
    }
    ?>
</body>
</html> 
