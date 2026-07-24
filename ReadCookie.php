<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Cookie</title>
</head>
<body>

    <h2>Read Cookie</h2>

<?php

    if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
    {
        echo "<b>Username :</b> ".$_COOKIE['username'];
        echo "<br><br>";

        echo "<b>Password :</b> ".$_COOKIE['password'];
    }
    else
    {
        echo "Cookie Not Found.";
    }

?>

</body>
</html>