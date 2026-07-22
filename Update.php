<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
    <form method="POST">
        <br><br>
        New Password :
        <input type="password" name="password">
        <br><br>
        Confirm Password :
        <input type="password" name="cpassword">
        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
<?php 

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password == $cpassword)
        {
            $sql = "UPDATE user2 SET password='$password' WHERE id=3";
            mysqli_query($conn,$sql);
        }
    }

?>