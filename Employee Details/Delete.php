<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete Employee Details</title>
</head>
<body>
    <?php include 'Header.php'; ?>
    <div class="container">
    <h3>Delete Employee Details</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Employee ID</td>
                    <td><input type="number" name="id" min="1"></td>
                </tr>
                <tr class="btn">
                    <td></td>
                    <td><input type="submit" value="Delete"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php
    $connection=mysqli_connect("localhost","root","","db_employee") or die("Connection Failed.");
    if($_POST){
        $id=$_POST['id'];
        $sql="DELETE from tbl_employee where e_id='{$id}'";
        $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
        if($query)
            echo "<script>alert('Record is Deleted'); window.location='Home.php';</script>";
    }
    mysqli_close($connection);
?>