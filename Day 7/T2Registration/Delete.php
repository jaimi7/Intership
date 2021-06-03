<?php
    $connection=mysqli_connect("localhost","root","","db_student")or die("Connection Failed");
    $id=$_GET['deletedId'];
    $sql="DELETE from student_info where id='{$id}'";
    $query=mysqli_query($connection,$sql);
    if($query){
        echo "<script>alert('Record Deleted'); window.location='Read.php';</script>";
    }
?>

