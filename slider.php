<?php

    include "db.php";

    $result=mysqli_query($conn,"SELECT * FROM images");

?>

<!DOCTYPE html>
<html>
<head>

<title>Image Slider</title>

    <style>

    body
    {
        font-family:Arial;
        text-align:center;
    }
    .slider
    {
        width:600px;
        height:400px;
        margin:auto;
        overflow:hidden;
        border:2px solid black;
    }
    .slider img
    {
        width:600px;
        height:400px;
        display:none;
    }
    .slider img.active
    {
        display:block;
    }

</style>

</head>

<body>

    <h2>Image Slider</h2>
    <div class="slider">

<?php

    $i=0;

    while($row=mysqli_fetch_assoc($result))
    {

?>

        <img src="<?php echo $row['image'];?>"
        class="<?php if($i==0)
        echo 'active'; ?>">

<?php

        $i++;
    }

?>

</div>

<script>

    let slides=document.querySelectorAll(".slider img");

    let index=0;

    setInterval(function(){

    slides[index].classList.remove("active");

    index++;

    if(index>=slides.length)
    {
        index=0;
    }
    slides[index].classList.add("active");
    },2000);

</script>

</body>
</html>