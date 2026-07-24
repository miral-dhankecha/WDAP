<!DOCTYPE html>
<html>
<head>
    <title>Display Cookie</title>
</head>
<body>

<h2>Cookie Details</h2>

<?php

if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
    echo "Username : " . $_COOKIE['username'];
    echo "<br><br>";
    echo "Password : " . $_COOKIE['password'];
}
else
{
    echo "Cookie Not Found.";
}

?>

</body>
</html>