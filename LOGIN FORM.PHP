<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
</head>
<body>
    
    <h2>Login</h2>
    <form method="post">
        Username :
        <input type="text" name="username" required>
        <br><br>

        Password :
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" name="login" value="Login">

    </form>

</body>
</html>

<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO user(name, password) VALUES ('$user','$pass')";

        if(mysqli_query($conn, $sql))
        {
            echo "Data Inserted Successfully";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }

?>