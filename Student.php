<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
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
        input[type=submit]
        {
            width:100%;
        }
        a
        {
            text-decoration:none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>
        <form method="POST">
            User Name
            <input type="username" name="username" required>
            Password
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" name="login" value="Login">
        </form>
        <p align="center">
            <a href="Update.php">Forgot Password?</a>
        </p>
    </div>
</body>
</html>