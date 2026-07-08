<!DOCTYPE html>
<html>
<head>
    <title>String Functions in PHP</title>
</head>
<body>

<?php

    $string = "Welcome to Marwadi University";

    echo "<h2>PHP String Functions</h2>";

    echo "<b>Original String:</b> " . $string . "<br><br>";

    // 1. strlen()
    echo "<b>1. strlen():</b><br>";
    echo "Length of string = " . strlen($string);
    echo "<br><br>";

    // 2. strpos()
    echo "<b>2. strpos():</b><br>";
    echo "Position of 'Marwadi' = " . strpos($string, "Marwadi");
    echo "<br><br>";

    // 3. str_word_count()
    echo "<b>3. str_word_count():</b><br>";
    echo "Number of words = " . str_word_count($string);
    echo "<br><br>";

    // 4. strrev()
    echo "<b>4. strrev():</b><br>";
    echo "Reverse String = " . strrev($string);
    echo "<br><br>";

    // 5. strtolower()
    echo "<b>5. strtolower():</b><br>";
    echo strtolower($string);
    echo "<br><br>";

    // 6. strtoupper()
    echo "<b>6. strtoupper():</b><br>";
    echo strtoupper($string);

?>

</body>
</html>