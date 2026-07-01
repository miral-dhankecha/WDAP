<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Example</title>
</head>
<body>

    <h2>PHP Array Types Example</h2>

<?php

    echo "<h3>1. Numeric Array:</h3>";

    $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    foreach($days as $day)
    {
        echo $day . "<br>";
    }

    echo "<h3>2. Associative Array:</h3>";

    $months = array(
        "January" => 30,
        "February" => 28,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31
    );

    foreach($months as $month => $days)
    {
        echo $month . " => " . $days . " Days<br>";
    }

    echo "<h3>3. Multidimensional Array:</h3>";

    $laptop = array(

        array(
            "Company" => "Dell",
            "Model" => "Inspiron 15",
            "Price" => "55000"
        ),

        array(
            "Company" => "HP",
            "Model" => "Pavilion 14",
            "Price" => "60000"
        )
    );

    foreach($laptop as $data)
    {
        echo "Company: " . $data["Company"] . "<br>";
        echo "Model: " . $data["Model"] . "<br>";
        echo "Price: Rs. " . $data["Price"] . "<br><br>";
    }

?>

</body>
</html>