<!DOCTYPE html>
<html>
<head>
    <title>Sort an Array using PHP</title>
</head>
<body>

    <h2>Sort an Array</h2>

    <form method="post">
        <label>Enter array elements (comma separated):</label><br><br>
        <input type="text" name="array" placeholder="Example: 5,2,8,1,9" required>
        <br><br>
        <input type="submit" name="sort" value="Sort Array">
    </form>

<?php
    if(isset($_POST['sort']))
    {
        $input = $_POST['array'];

        $arr = explode(",", $input);

        $arr = array_map('trim', $arr);

        echo "<h3>Original Array:</h3>";
        echo implode(", ", $arr);

        sort($arr);

        echo "<h3>Sorted Array (Ascending):</h3>";
        echo implode(", ", $arr);
    }
?>

</body>
</html>