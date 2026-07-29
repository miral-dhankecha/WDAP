<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];

        setcookie("username", $username, time()+86400);

        echo "<h3>Cookie Stored Successfully on Client Machine.</h3>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Cookie</title>
</head>
<body>

    <h2>Store Cookie on Client Machine</h2>
    <form method="post">
        Username :
        <input type="text" name="username" required>
        <br><br>
        <input type="submit" value="Store Cookie">

    </form>

<?php

    if(isset($_COOKIE['username']))
    {
        echo "<br><br>";
        echo "<b>Stored Cookie :</b> ".$_COOKIE['username'];
    }

?>

</body>
</html>