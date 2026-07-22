<?php 

    include 'db.php';

    $sql = "delete from user2 where id=2";
    mysqli_query($conn,$sql);

    echo "Record Deleted...";

?>