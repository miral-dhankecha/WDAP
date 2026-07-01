<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Require Example</title>
</head>
<body>

    <h2>PHP Include and Require Function Example</h2>

<?php

    echo "<h3>Using Include Function:</h3>";

    include "message.php";

    echo "<br>File included successfully.";

    echo "<h3>Using Require Function:</h3>";

    require "welcome.php";

    echo "<br>File required successfully.";

?>

</body>
</html>