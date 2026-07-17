<?php

include "db.php";

// Insert Record
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO student(name,course,email,mobile)
            VALUES('$name','$course','$email','$mobile')";

    mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Student Record</title>

<style>

body{
    font-family:Arial;
}

.container{
    width:400px;
    margin:auto;
    border:1px solid black;
    padding:20px;
}

table{
    width:90%;
    margin:20px auto;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th,td{
    padding:8px;
    text-align:center;
}

input{
    width:100%;
    padding:8px;
    margin-bottom:10px;
}

input[type=submit]{
    width:100%;
}

</style>

</head>

<body>

<div class="container">

<h2 align="center">Student Form</h2>

<form method="post">

Name

<input type="text" name="name" required>

Course

<input type="text" name="course" required>

Email

<input type="email" name="email" required>

Mobile

<input type="text" name="mobile" required>

<input type="submit" name="save" value="Save">

</form>

</div>

<h2 align="center">Student Details</h2>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Email</th>
<th>Mobile</th>

</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM student");

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>

</tr>

<?php
}

?>

</table>

</body>
</html>