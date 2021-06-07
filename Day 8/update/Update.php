<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style> 
        div{
            width: 500px;
            border: 1px solid #000;
            margin: 10px auto;  
        }
        td{
            padding: 8px 20px;
        }
        input,select{
            width: 250px;
        }
        .btn input{
            width: 100px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 align="center">Update Data</h2>
        <?php
            $connection=mysqli_connect("localhost","root","","db_student") or die("Connection Failed.");
            $id=$_GET['updatedId'];
            $sql="SELECT * from student_info where id='{$id}'";
            $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_array($query)){
        ?>
        <form action="" method="POST">
            <table>
                <tr>
                    <td colspan=2>
                        <h3 align="center">Employee ID :
                            <?php echo $row['id']; ?>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $row['sname']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id="" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender" id="">
                            <?php
                                $male= "";
                                $female= "";
                                $other= "";                             
                                if($row['gender']==Male){
                                    $male= "selected";
                                }elseif($row['gender']==Female){
                                    $female= "selected";
                                }else{
                                    $other= "selected";
                                }
                            ?>
                            <option <?php echo $male; ?> > Male</option>
                            <option <?php echo $female; ?> > Female</option>
                            <option <?php echo $other; ?> > Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" id="" value="<?php echo $row['saddress']; ?>"></td>
                </tr>
                <tr>
                    <td>Pincode</td>
                    <td><input type="number" name="pincode" id="" value="<?php echo $row['pincode']; ?>"></td>
                </tr>
                <tr>
                    <td>Mobile No.</td>
                    <td><input type="number" name="mobile" id="" value="<?php echo $row['mobile']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" id="" value="<?php echo $row['spassword']; ?>"></td>
                </tr>
                <tr>
                    <td>Bloodgroup</td>
                    <td>
                        <select name="bloodgroup"  value="<?php echo $row['bloodgroup']; ?>">
                            <?php
                                $a= "";
                                $b= "";
                                $ab= "";
                                $o= "";
                                $A= "";
                                $B= "";
                                $AB= "";
                                $O= "";
                                if($row['bloodgroup']=='A+'){
                                    $A= "selected";
                                }elseif($row['bloodgroup']=='B+'){
                                    $B= "selected";
                                }elseif($row['bloodgroup']=='O+'){
                                    $O= "selected";
                                }elseif($row['bloodgroup']=='AB+'){
                                    $AB= "selected";
                                }elseif($row['bloodgroup']=='A-'){
                                    $a= "selected";
                                }elseif($row['bloodgroup']=='B-'){
                                    $b= "selected";
                                }elseif($row['bloodgroup']=='O-'){
                                    $o= "selected";
                                }else{
                                    $ab= "selected";
                                }
                            ?>
                            <option <?php echo $A; ?> >A+</option>
                            <option <?php echo $a; ?> >A-</option>
                            <option <?php echo $B; ?> >B+</option>
                            <option <?php echo $b; ?> >B-</option>
                            <option <?php echo $AB; ?> >AB+</option>
                            <option <?php echo $ab; ?> >AB-</option>
                            <option <?php echo $O; ?> >O+</option>
                            <option <?php echo $o; ?> >O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="dob" id="" value="<?php echo $row['dob']; ?>"></td>
                </tr>
                <tr class="btn">
                    <td><input type="submit" value="Update"></td>
                    <td><input type="reset"></td>
                </tr>
            </table>
        </form>
        <?php
                }
            }else{
                echo"<h2>No Data Found !</h2>";
            }
        ?>
    </div>
</body>

</html>

<?php
    if($_POST){
        $id=$_GET['updatedId'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $bloodgroup=$_POST['bloodgroup'];
        $dob=$_POST['dob'];

        $usql="UPDATE student_info SET id='{$id}',sname='{$name}',email='{$email}',gender='{$gender}',
        saddress='{$address}',pincode='{$pincode}',mobile='{$mobile}', bloodgroup='{$bloodgroup}',dob='{$dob}' WHERE id={$id}";        
        $uquery=mysqli_query($connection,$usql) or die("Query Unsuccessful.");
        if($uquery)
            echo "<script>alert('Record is Updated');window.location='Home.php';</script>";
    }
    mysqli_close($connection);
?>