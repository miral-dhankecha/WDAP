<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
</head>
<body>

    <h2>Create Session</h2>

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

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: DisplaySession.php");
        exit();
}

?>