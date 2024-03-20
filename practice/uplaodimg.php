
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploading</title>
</head>
<body>
<form action="uploadimg.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image">
    <input type="submit"name="submit">
</form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_FILES['image']))
{
    $error = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['size'];
    $file_tmp = $_FILES['image']['tmp'];
    $file_type = $_FILES['image']['type'];
 if($file_size > 2097152)
 {
$error[] = "file must b 2MB";
 }
 if(empty($error) == true)
 {
    move_uploaded_file($file_tmp,"images/".$file_name);
    echo "success";
 }
 else
 {
    print_r($error);
 }
}
}
?>