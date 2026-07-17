<!DOCTYPE html>
<html>
<head>
    <title>Display User Details</title>

    <style>
        table{
            border-collapse:collapse;
            width:80%;
            margin:auto;
        }

        th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        h2{
            text-align:center;
        }
    </style>

</head>
<body>

<h2>User Details</h2>

<?php

include "db.php";

$sql = "SELECT * FROM users1";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    echo "<table>";

    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>";

    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";

        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "No Record Found";
}

mysqli_close($conn);

?>

</body>
</html>