<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form method="post" enctype="multipart/form-data">

    Select Image:
    <input type="file" name="image" required><br><br>

    <input type="submit" name="upload" value="Upload">

</form>

<?php

if(isset($_POST['upload']))
{
    $folder = "uploads/";

    // Create uploads folder if it doesn't exist
    if(!is_dir($folder))
    {
        mkdir($folder);
    }

    $filename = basename($_FILES["image"]["name"]);
    $tempname = $_FILES["image"]["tmp_name"];

    $path = $folder . $filename;

    if(move_uploaded_file($tempname,$path))
    {
        echo "<h3>Image Uploaded Successfully.</h3>";
        echo "<img src='$path' width='250'>";
    }
    else
    {
        echo "<h3>Image Upload Failed.</h3>";
    }
}

?>

</body>
</html>