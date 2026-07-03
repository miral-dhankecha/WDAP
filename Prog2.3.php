<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

    <h2>PHP Array Functions</h2>

<?php

    echo "<h3>1. array_change_key_case()</h3>";

    $student = array(
        "Name" => "Min",
        "Course" => "BCA",
        "City" => "Rajkot"
    );

    echo "<b>Original Array:</b><br>";
    print_r($student);

    echo "<br><br><b>Keys in Lower Case:</b><br>";
    print_r(array_change_key_case($student, CASE_LOWER));

    echo "<br><br><b>Keys in Upper Case:</b><br>";
    print_r(array_change_key_case($student, CASE_UPPER));

    echo "<hr>";

    echo "<h3>2. array_count_values()</h3>";

    $colors = array("Red", "Blue", "Green", "Red", "Blue", "Red");

    echo "<b>Original Array:</b><br>";
    print_r($colors);

    echo "<br><br><b>Count of Values:</b><br>";
    print_r(array_count_values($colors));

    echo "<hr>";

    echo "<h3>3. array_pop()</h3>";

    $fruits = array("Apple", "Banana", "Mango", "Orange");

    echo "<b>Original Array:</b><br>";
    print_r($fruits);

    $removed = array_pop($fruits);

    echo "<br><b>Removed Element:</b> " . $removed;

    echo "<br><br><b>Array After array_pop():</b><br>";
    print_r($fruits);

?>

</body>
</html>