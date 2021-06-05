<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Employee Details</title> 
</head>
<body>
    <?php include 'Header.php'; ?>
    <div class="container">
        <h3>Update Employee Details</h3>
        <?php
            $connection=mysqli_connect("localhost","root","","db_employee") or die("Connection Failed.");
            $id=$_GET['updateId'];
            $sql="SELECT * from tbl_employee where e_id='{$id}'";
            $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_array($query)){
        ?>
        <form action="" method="POST">
        <table>
                <tr>
                    <td colspan=2><h2 align="center">Employee ID : <?php echo $row['e_id']; ?></h2></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $row['e_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id="" value="<?php echo $row['e_email']; ?>"></td>
                </tr>
                <tr>
                    <td>Mobile No.</td>
                    <td><input type="number" name="mobile" id="" value="<?php echo $row['e_number']; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender" id="" >
                            <?php
                                $male= "";
                                $female= "";
                                $other= "";                             
                                if($row['e_gender']==Male){
                                    $male= "selected";
                                }elseif($row['e_gender']==Female){
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
                    <td>City</td>
                    <td>
                        <select name="city" id="">
                            <?php
                                $valsad= "";
                                $surat= "";
                                $vapi= "";
                                $vadodara= "";
                                $anand= "";
                                $nadiyad= "";
                                if($row['e_city']==Valsad){
                                    $valsad= "selected";
                                }elseif($row['e_city']==Surat){
                                    $surat= "selected";
                                }elseif($row['e_city']==Vapi){
                                    $vapi= "selected";
                                }elseif($row['e_city']==Vadodara){
                                    $vadodara= "selected";
                                }elseif($row['e_city']==Anand){
                                    $anand= "selected";
                                }else{
                                    $nadiyad= "selected";
                                }
                            ?>
                            <option <?php echo $valsad; ?> >Valsad</option>
                            <option <?php echo $surat; ?> >Surat</option>
                            <option <?php echo $vapi; ?> >Vapi</option>
                            <option <?php echo $vadodara; ?> >Vadodara</option>
                            <option <?php echo $anand; ?> >Anand</option>
                            <option <?php echo $nadiyad; ?> >Nadiyad</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <select name="department" id="" value="<?php echo $row['e_department']; ?>">
                            <?php
                                $developing= "";
                                $desinging= "";
                                $marketing= "";
                                $finance= "";
                                $operation= "";
                                if($row['e_department']==Developing){
                                    $developing= "selected";
                                }elseif($row['e_department']==Desinging){
                                    $desinging= "selected";
                                }elseif($row['e_department']==Marketing){
                                    $marketing= "selected";
                                }elseif($row['e_department']==Finance){
                                    $finance= "selected";
                                }else{
                                    $operation= "selected";
                                }
                            ?>
                            <option <?php echo $developing; ?> >Developing</option>
                            <option <?php echo $desinging; ?> >Desinging</option>
                            <option <?php echo $marketing; ?> >Marketing</option>
                            <option <?php echo $finance; ?> >Finance</option>
                            <option <?php echo $operation; ?> >Operation</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="number" name="salary" id="" value="<?php echo $row['e_salary']; ?>"></td>
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
        $id=$_GET['updateId'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $department=$_POST['department'];
        $salary=$_POST['salary'];

        $usql="UPDATE tbl_employee SET e_id='{$id}',e_name='{$name}',e_email='{$email}',e_number='{$mobile}',e_gender='{$gender}',e_city='{$city}',e_department='{$department}',e_salary='{$salary}' WHERE e_id={$id}";        $uquery=mysqli_query($connection,$usql) or die("Query Unsuccessful.");
        if($uquery)
            echo "<script>alert('Record is Updated');window.location='Home.php';</script>";
    }
    mysqli_close($connection);
?>