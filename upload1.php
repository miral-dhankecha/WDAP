<?php

    include "db.php";

    if(isset($_POST['upload']))
    {
        $filename=$_FILES['image']['name'];
        $temp=$_FILES['image']['tmp_name'];

        $folder="uploads/".$filename;

        if(move_uploaded_file($temp,$folder))
        {
            mysqli_query($conn,"INSERT INTO images(image)
            VALUES('$folder')");

            echo "Image Uploaded Successfully";
        }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Image</title>
</head>

<body>

    <h2>Upload Image</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="file" name="image" required>

        <br><br>

        <input type="submit" name="upload" value="Upload">

    </form>

    <br>

    <a href="slider.php">View Slider</a>

</body>
</html>