<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie with Header</title>
</head>
<body>

    <h2>Cookie Form</h2>

    <form method="post">

        Username :
        <input type="text" name="username" required>
        <br><br>
        Password :
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Submit">

    </form>

</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

    setcookie("username", $username, time()+86400);
    setcookie("password", $password, time()+86400);

    header("Location: DisplayCookie.php");
    exit();
}

?>