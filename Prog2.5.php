<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function Calculator</title>
</head>
<body>

    <h2>Simple Calculator using User Defined Function</h2>

    <form method="post">
        Enter First Number:
        <input type="number" name="num1" required><br><br>

        Enter Second Number:
        <input type="number" name="num2" required><br><br>

        Select Operation:
        <select name="operator">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        <br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

<?php

    // User Defined Function
    function calculator($a, $b, $op)
    {
        switch($op)
        {
            case "+":
                return $a + $b;

            case "-":
                return $a - $b;

            case "*":
                return $a * $b;

            case "/":
                if($b == 0)
                    return "Division by zero is not allowed.";
                else
                    return $a / $b;

            default:
                return "Invalid Operation";
        }
    }

    if(isset($_POST['calculate']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        $result = calculator($num1, $num2, $operator);

        echo "<h3>Result: $result</h3>";
    }

?>

</body>
</html>