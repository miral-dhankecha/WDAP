<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Demo";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check Connection
if(!$conn)
{
    die("Connection Failed : " . mysqli_connect_error());
} 

?>