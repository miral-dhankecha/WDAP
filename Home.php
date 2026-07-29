<?php

    session_start();

    if(!isset($_SESSION['username']))
    {
        header("Location: 3.7Login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

    <h2>Welcome</h2>

<?php

    echo "Hello, ".$_SESSION['username'];

?>

    <br><br>

    <a href="Logout.php">Logout</a>

</body>
</html>