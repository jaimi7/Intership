<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="stl.css"/>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Student Registration Form</h2>
					<div class="form-row">
						<input type="number" name="id" id="id" class="input-text" placeholder="Student Id" required>
					</div>
					<div class="form-row">
						<input type="text" name="name" id="name" class="input-text" placeholder="Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
					</div>
					<div class="form-row">
						<select name="gender">
						    <option value="Male">Gender</option>
						    <option value="Male">Male</option>
						    <option value="Female">Female</option>
						    <option value="Other">Other</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="address" class="input-text" id="address" placeholder="Address" required>
					</div>
					<div class="form-row">
						<input type="number" name="pincode" class="input-text" id="pincode" placeholder="Pincode" required>
					</div>					
				</div>
				<div class="form-right">
					<h2></h2>
					<div class="form-row">
						<input type="number" name="mobile" class="input-text" id="mobile" placeholder="Mobile No" required>
					</div>
					<div class="form-row">
						<input type="password" name="password" class="input-text" id="password" placeholder="Password" required>
					</div>				
					<div class="form-row">
						<select name="bloodgroup">
						    <option>Bloodgroup</option>
						    <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB-</option>
                            <option>AB+</option>
                            <option>O-</option>
                            <option>O+</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="date" name="dob" class="input-text" id="dob" placeholder="Date of Birth" required>
					</div>

					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="submit" class="register" value="Register">
						<a href="Read.php" class="links">Read Student Records</a>
					</div>
				</div>
			</form>
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