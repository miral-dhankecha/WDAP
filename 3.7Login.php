<?php

    session_start();

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=="admin" && $password=="12345")
        {
            $_SESSION['username']=$username;

            header("Location: Home.php");
            exit();
        }
        else
        {
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body
        {
            font-family:Arial;
        }
        .container
        {
            width:300px;
            margin:80px auto;
            border:1px solid black;
            padding:20px;
        }
        h2
        {
            text-align:center;
        }
        input
        {
            width:100%;
            padding:8px;
            margin-bottom:15px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>
        <form method="post">
            Username
            <input type="text" name="username" required>
            Password
            <input type="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>