<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie</title>
</head>
<body>

    <h2>Delete Cookie</h2>

    <form method="post">

        <input type="submit" name="delete" value="Delete Cookie">

    </form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        setcookie("username", "", time()-86400);
        setcookie("password", "", time()-86400);

        echo "<h3>Cookie Deleted Successfully.</h3>";
    }

?>

</body>
</html>