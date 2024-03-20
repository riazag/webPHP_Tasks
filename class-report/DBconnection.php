<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'sdb';

$conn = mysqli_connect($host, $user, $pass, $database);

if(!$conn){
    die('Could not connect: ' . mysqli_error());
}

echo "Connection successful";

$sql = 'SELECT * FROM student';

$retval = mysqli_query($conn, $sql);

if(!$retval){
    die('Could not get data' . mysqli_error());
}

while($row=mysqli_fetch_array($retval,MYSQLI_ASSOC))
{
    echo "<table border = '1'><tr>";
    echo "<td>";  
echo $row['std_id'];
echo "</td><td>";
echo $row['studentName'];
echo "</td><td>";
echo $row['marks'];
echo "</td><td>";
echo $row['semester'];
echo "</td></tr></table>";

if ($row['marks']== 50)
{
    echo "you are pass";
}

}

echo "Data retrival successful";

?>