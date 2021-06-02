<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
        form{
            width: 400px;
            padding: 20px;
            margin: 10px auto;
            border: 1px solid #000;
        }
        table{
            margin: 10px auto;
        }
        td{
            padding: 20px;
        }
        input{
            padding: 8px;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h2>Enter Your Details</h2>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    $connection=mysqli_connect("localhost","root","","db_demo");
    if($_POST){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO tbl_user (user_name,user_email,user_password) VALUES ('{$name}','{$email}','{$password}')";
        $query=mysqli_query($connection,$sql);
        if($query)
            echo "<script>alert('Record is added');</script>";
    }
?>