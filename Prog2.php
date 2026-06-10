<?php

    $num1 = 25;
    $num2 = 50;

    if($num1 > $num2)
    {
        $max = $num1;
        $min = $num2;   
    }
    else
    {
        $max = $num2;
        $min = $num1;
    }

    echo "First Number : " . $num1 . "<br>";
    echo "Second Number : " . $num2 . "<br><br>";

    echo "Maximum Number is : " . $max . "<br>";
    echo "Minimum Number is : " . $min;

?>