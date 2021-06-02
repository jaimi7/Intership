<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="stl.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Student Registration Form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="id">ID :</label>
                                <input type="number" name="id" id="id" required/>
                            </div>
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID:</label>
                            <div class="form-select">
                                <input type="email" name="email" id="email" required/>
                            </div>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked value="Male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="Female"> 
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>                       
                        <div class="form-row">
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" name="address" id="address" required/>
                            </div>
                            <div class="form-group">
                                <label for="pincode">Pincode :</label>
                                <input type="number" name="pincode" id="pincode">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="mobile">Mobile No:</label>
                                <input type="number" name="mobile" id="mobile">
                            </div>  
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password">
                            </div>
                        </div>                      
                        <div class="form-row">
                            <div class="form-group">
                                <label for="bloodgroup">Bloodgroup :</label>
                                <div class="form-select">
                                    <select name="bloodgroup" id="bloodgroup">
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB-</option>
                                        <option>AB+</option>
                                        <option>O-</option>
                                        <option>O+</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down">^</i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Birth Date :</label>
                                <input type="date" name="dob" id="dob">
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    $connection=mysqli_connect("localhost","root","","db_student")or die("Connection Failed");
    if($_POST){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $bloodgroup=$_POST['bloodgroup'];
        $dob=$_POST['dob'];

        $sql="INSERT INTO student_info (id,sname,email,gender,saddress,pincode,mobile,spassword,bloodgroup,dob) 
            VALUES ({$id},'{$name}','{$email}','{$gender}','{$address}',{$pincode},{$mobile},'{$password}','$bloodgroup','{$dob}')" 
            or die("Error".mysquli_error($connection));

         $query=mysqli_query($connection,$sql);
        if($query)
            echo "<script>alert('Record is added');</script>";
    }
?>