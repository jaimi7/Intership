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
            background: #dedede;
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
        a{
            display: block;
            border: 1px solid #000;
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            width:120px;
            font-weight:800;
            font-size: 18px;
            color: #fff;
            background: #000;
            text-decoration: none;
        }
        a:hover{
            color: #0000ff;
        }
    </style>
</head>
<body>
        <?php
            $connection=mysqli_connect("localhost","root","","db_demo") or die("Connection Failed.");
            $id=$_GET['updatedId'];
            $sql="SELECT * from tbl_user where user_id='{$id}'";
            $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_array($query)){
        ?>
    <form action="" method="POST">
        <h2>Enter Your Details</h2>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row['user_name']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="<?php echo $row['user_email']; ?>" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id=""  value="<?php echo $row['user_password']; ?>" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
        <?php
                }
            }else{
                echo"<h2>No Data Found !</h2>";
            }
        ?>
    <a href="Read.php">Read The Data</a>
</body>
</html>

<?php
    if($_POST){
        $id=$_GET['updatedId'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $usql="UPDATE tbl_user SET user_name='{$name}',user_email='{$email}',user_password='{$password}' WHERE user_id={$id}";        
        $uquery=mysqli_query($connection,$usql) or die("Query Unsuccessful.");
        if($uquery)
            echo "<script>alert('Record is Updated');window.location='Read.php';</script>";
    }
    mysqli_close($connection);
?>