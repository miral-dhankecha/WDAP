<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Form</title>
</head>
<body>
    <form method="post">

        <label>Username :</label>
        <input type="text" name="username">
        <br><br>
        <label>Password :</lable>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>
<?php  
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        setcookie("username", $username, time()+86400,"/");
        header("Location: DisplayCookie.php");
        exit();
}
?>