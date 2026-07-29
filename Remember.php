<?php

    $username = "";
    $password = "";
    $checked = "";

    if(isset($_COOKIE['username']))
    {
        $username = $_COOKIE['username'];
        $checked = "checked";
    }

    if(isset($_COOKIE['password']))
    {
        $password = $_COOKIE['password'];
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_POST['remember']))
        {
            setcookie("username", $username, time()+86400);
            setcookie("password", $password, time()+86400);
        }
        else
        {
            setcookie("username", "", time()-86400);
            setcookie("password", "", time()-86400);
        }   

        header("Location: Remember.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>

    <style>
        body
        {
            font-family: Arial;
        }
        .container
        {
            width:350px;
            margin:80px auto;
            border:1px solid black;
            padding:20px;
        }
        h2
        {
            text-align:center;
        }
        input[type=text],
        input[type=password]
        {
            width:100%;
            padding:8px;
            margin-top:5px;
            margin-bottom:15px;
        }
        input[type=submit]
        {
            padding:8px 20px;
        }

    </style>

</head>
<body>

    <div class="container">
        <h2>Login Form</h2>
        <form method="post">
            Username
            <input type="text" name="username" value="<?php echo $username; ?>" required>
            Password
            <input type="password" name="password" value="<?php echo $password; ?>" required>
            <input type="checkbox" name="remember" <?php echo $checked; ?>>
            Remember Me
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>