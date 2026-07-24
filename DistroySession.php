<?php

    session_start();

    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Session</title>
</head>
<body>

    <h2>Destroy Session</h2>

<?php

    echo "Session Destroyed Successfully.";

?>

    <br><br>

    <a href="DisplaySession.php">Go to Login Page</a>

</body>
</html>