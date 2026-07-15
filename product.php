<?php
    include 'db.php';

    if(isset($_POST['save']))
    {
        $name=$_POST['name'];
        $price=$_POST['price'];
        $type=$_POST['type'];
        $image=$_POST['image'];
        $qty=$_POST['qty'];

        $sql="INSERT INTO product(product_name,product_price,product_type,product_image,product_qty)
        VALUES('$name','$price','$type','$image','$qty')";

        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Product Added Successfully');</script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Product Form</title>
    <style>
        body
        {
            font-family:Arial;
        }
        .box
        {
            width:350px;
            margin:40px auto;
            border:1px solid black;
            padding:20px;
        }
        h2
        {
            text-align:center;
        }
        input,select
        {
            width:100%;
            padding:8px;
            margin-top:5px;
            margin-bottom:15px;
        }
        input[type=submit]
        {
            width:100%;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Product</h2>
            <form method="post">
                Product Name
                <input type="text" name="name" required>
                Product Price
                <input type="number" name="price" required>
                Product Type
                <select name="type">
                    <option>Electronics</option>
                    <option>Fashion</option>
                    <option>Books</option>
                    <option>Furniture</option>
                </select>
                Product Image
                <input type="text" name="image" placeholder="image.jpg">
                Product Qty
                <input type="number" name="qty" required>
                <input type="submit" name="save" value="Add Product">
            </form>
    </div>
</body>
</html>