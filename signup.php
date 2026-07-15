<?php
include 'db.php';

if (!isset($conn)) {
    die("db.php loaded nahi hua ya \$conn create nahi hua.");
}

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if($password != $confirm)
    {
        echo "<script>alert('Password and Confirm Password do not match');</script>";
    }
    else
    {
        $sql = "INSERT INTO users(name,password,email,phone)
                VALUES('$name','$password','$email','$phone')";

        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Data Inserted Successfully');</script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup Form</title>

<style>

body{
    font-family:Arial;
}

.container{
    width:320px;
    margin:50px auto;
    border:1px solid black;
    padding:20px;
}

h2{
    text-align:center;
}

input{
    width:100%;
    padding:8px;
    margin-top:5px;
    margin-bottom:15px;
}

input[type=submit]{
    width:100%;
}

</style>

</head>

<body>

<div class="container">

<h2>Sign Up</h2>

<form method="post">

Name

<input type="text" name="name" required>

Password

<input type="password" name="password" required>

Confirm Password

<input type="password" name="confirm" required>

Email

<input type="email" name="email" required>

Phone

<input type="text" name="phone" required>

<input type="submit" name="signup" value="Sign Up">

</form>

</div>

</body>
</html>