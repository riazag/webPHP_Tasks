<!-- Here will acess those session variables from page 1 -->
<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "User is " . $_SESSION["Username"] . ".<br>";
    // echo "FavColor is " .$_SESSION["FavColor"];


    // Another way to print variables
    print_r($_SESSION);


    // remove all session variables
// session_unset();

/// destroy the session
// session_destroy();
    ?>


</body>
</html>
