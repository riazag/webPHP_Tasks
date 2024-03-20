<?php
$host='localhost';
$user='root';
$pass='';
$database='tab';
$conn= mysqli_connect($host,$user,$pass,$database);
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
    if(!$conn)
    {
      die('couldnot connect' .mysqli_connect_error());
    
    }
    echo "connection successful";
    $query= 'SELECT * FROM `tab`.`tabs`';
    $retriev=mysqli_query($conn,$query);
    if(!$retriev) 
    {
      die('could not retrieve data' .mysqli_connect_error());
    
    }
    while($row=mysqli_fetch_array($retriev,MYSQLI_ASSOC));
    {
      echo "<table border = '1'><tr>";
     echo "<td>";  
    echo $row['name'];
    echo "</td><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['subject'];
    echo "</td><td>";
    echo $row['marks'];
    echo "</td></tr></table>";
    
    }
    ?>
</body>
</html>