<!DOCTYPE html>
<html>
<head>
    <title>MySQL Date Functions</title>
</head>
<body>

    <h2>MySQL Date Functions</h2>

<?php

    // MySQL Server Connection (No Database Required)

    $conn = mysqli_connect("localhost", "root", "");

    // Check Connection

    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // SQL Query

    $query = "SELECT
                DAYOFWEEK(CURDATE()) AS DayOfWeek,
                WEEKDAY(CURDATE()) AS WeekDay,
                DAYOFMONTH(CURDATE()) AS DayOfMonth,
                DAYOFYEAR(CURDATE()) AS DayOfYear,
                DAYNAME(CURDATE()) AS DayName";

    // Execute Query

    $result = mysqli_query($conn, $query);

    // Display Result

    $row = mysqli_fetch_assoc($result);

    echo "<b>1. DAYOFWEEK() :</b> " . $row['DayOfWeek'] . "<br><br>";

    echo "<b>2. WEEKDAY() :</b> " . $row['WeekDay'] . "<br><br>";

    echo "<b>3. DAYOFMONTH() :</b> " . $row['DayOfMonth'] . "<br><br>";

    echo "<b>4. DAYOFYEAR() :</b> " . $row['DayOfYear'] . "<br><br>";

    echo "<b>5. DAYNAME() :</b> " . $row['DayName'] . "<br><br>";

    // Close Connection

    mysqli_close($conn);

?>

</body>
</html>