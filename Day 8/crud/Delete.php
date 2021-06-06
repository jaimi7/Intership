<?php

    $connection=mysqli_connect("localhost","root","","db_demo");
    $id=$_GET['deletedId'];
    $sql="DELETE from tbl_user where user_id='{$id}'";
    $query=mysqli_query($connection,$sql);
    if($query){
        echo "<script>alert('Record Deleted'); window.location='Read.php';</script>";
    }
?>

