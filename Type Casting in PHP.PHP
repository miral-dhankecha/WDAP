<!DOCTYPE html>
<html>
<head>
    <title>Type Casting in PHP</title>
</head>
<body>

    <h2>Type Casting using settype() and gettype()</h2>

</body>
</html>

<?php

    $value = "100";

    echo "<b>Original Value :</b> " . $value . "<br>";
    echo "<b>Original Data Type :</b> " . gettype($value) . "<br><br>";

    settype($value, "integer");

    echo "<b>After Type Casting</b><br>";
    echo "Value : " . $value . "<br>";
    echo "Data Type : " . gettype($value) . "<br>";

?>