<!DOCTYPE html>
<html>
<head>
    <title>MySQL Time Functions</title>
</head>
<body>

    <h2>MySQL Time Functions</h2>

<?php

    // MySQL Server Connection (No Database Required)

    $conn = mysqli_connect("localhost", "root", "");

    // Check Connection

    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // SQL Query

    $query = "SELECT
                HOUR(NOW()) AS Hour,
                MINUTE(NOW()) AS Minute,
                SECOND(NOW()) AS Second,
                DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS DateTime";

    // Execute Query

    $result = mysqli_query($conn, $query);

    // Display Result

    $row = mysqli_fetch_assoc($result);

    echo "<b>1. HOUR() :</b> " . $row['Hour'] . "<br><br>";

    echo "<b>2. MINUTE() :</b> " . $row['Minute'] . "<br><br>";

    echo "<b>3. SECOND() :</b> " . $row['Second'] . "<br><br>";

    echo "<b>4. DATE_FORMAT() :</b> " . $row['DateTime'] . "<br><br>";

    // Close Connection
    mysqli_close($conn);

?>

</body>
</html>