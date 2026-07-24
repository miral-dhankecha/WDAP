<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Session</title>
</head>
<body>

    <h2>Session Details</h2>

<?php

    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        echo "Username : " . $_SESSION['username'];

        echo "<br><br>";

        echo "Password : " . $_SESSION['password'];
    }
    else
    {
        echo "Session Not Found.";
    }

?>

</body>
</html>