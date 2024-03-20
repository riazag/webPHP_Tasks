<?php
include  'connection.php'
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
if(!$con){
    die('Could not connect: ' . mysqli_error());
}

echo "Connection successful";

        $query = "SELECT * FROM `user`.`users`";

        $retval = mysqli_query($con,$query);
        if(!$retval){
            die('Could not get data' . mysqli_error());
        }
        while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
        {
            echo "<TABLE border = '1'>";
            echo "<tr><td>";
            echo $row['username'];
            echo "</td><td>";
            echo $row['email'];
            echo " </td><td>";
            echo $row['password'];
            echo  "</td></tr>";
            echo "<TABLE>";
            
        }
    ?>
</body>
</html>
