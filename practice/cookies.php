<!-- A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values. -->
<!-- Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
Only the name parameter is required. All other parameters are optional. -->

<?php
$cookie_name = "user";
$cookie_value = "Riaz";

// The setcookie() function must appear BEFORE the <html> tag.
setcookie($cookie_name,$cookie_value,Time()+(86400 * 30),"/");

// set the expiration date to one hour ago
// setcookie("user", "", time() - 3600);
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
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie '.$cookie_name' is not set";
    }
    else{
        echo "cookie $cookie_name is set <br>";
        echo "cookie Value is $cookie_value ";
    }
    // if(count($_COOKIE) > 0) {
    //     echo "Cookies are enabled.";
    //   } else {
    //     echo "Cookies are disabled.";
    //   } 
    ?>
</body>
</html>