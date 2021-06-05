<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Employee Details</title>
</head>
<body>
    <?php include 'Header.php'; ?>
    <div class="container">
        <h3>Add Employee Details</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Employee ID</td>
                    <td><input type="number" name="id" min="1"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <td>Mobile No.</td>
                    <td><input type="number" name="mobile" id=""></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender" id="">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                    <select name="city" id="">
                            <option>Valsad</option>
                            <option>Surat</option>
                            <option>Vapi</option>
                            <option>Vadodara</option>
                            <option>Anand</option>
                            <option>Nadiyad</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                    <select name="department" id="">
                            <option>Developing</option>
                            <option>Desinging</option>
                            <option>Marketing</option>
                            <option>Finance</option>
                            <option>Operation</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="number" name="salary" id=""></td>
                </tr>
                <tr class="btn">
                    <td><input type="submit" value="Add"></td>
                    <td><input type="reset"></td>
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
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $department=$_POST['department'];
        $salary=$_POST['salary'];

        $sql="INSERT INTO tbl_employee (e_id,e_name,e_email,e_number,e_gender,e_city,e_department,e_salary) VALUES ('{$id}','{$name}','{$email}','{$mobile}','{$gender}','{$city}','{$department}','{$salary}')";
        $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
        if($query)
            echo "<script>alert('Record is added');window.location='Home.php';</script>";
    }
    mysqli_close($connection);
?>