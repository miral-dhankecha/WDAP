<?php

    include "db.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update']))
    {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $date = $_POST['date'];

        $sql = "UPDATE users
                SET
                name='$name',
                mobile='$mobile',
                created_at='$date'
                WHERE id='$id'";

        mysqli_query($conn,$sql);

        header("Location: register.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <style>
        body
        {
            font-family:Arial;
        }
        .container
        {
            width:350px;
            margin:50px auto;
            border:1px solid black;
            padding:20px;
        }
        input
        {
            width:100%;
            padding:8px;
            margin-bottom:10px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2 align="center">Edit Record</h2>
            <form method="post">
            Name
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
            Mobile
            <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>">
            Date
            <input type="date" name="date" value="<?php echo $row['created_at']; ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </div>

</body>
</html>