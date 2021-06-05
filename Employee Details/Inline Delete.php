<?php
    $connection=mysqli_connect("localhost","root","","db_employee") or die("Connection Failed.");
    $id=$_GET['deletedId'];
    $sql="DELETE from tbl_employee where e_id='{$id}'";
    $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
    if($query){
        echo "<script>alert('Record is Deleted'); window.location='Home.php';</script>";
    }
?>

