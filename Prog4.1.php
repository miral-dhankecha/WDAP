<?php

    $month = date("F");

    if ($month)
    {
        echo "Current Month: " . $month;
    }
    else
    {
        echo "Month not found";
    }

?>