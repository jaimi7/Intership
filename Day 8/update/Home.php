<?php
    $connection=mysqli_connect("localhost","root","","db_student")or die("Connection Failed");
    $sql="SELECT * from student_info";
    $query=mysqli_query($connection,$sql);
    echo "<h1>Update The Data</h1>";
    echo "<table cellspacing=0>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Gender</th>";
    echo "<th>Address</th>";
    echo "<th>Pincode</th>";
    echo "<th>Mobile NO</th>";
    echo "<th>Password</th>";
    echo "<th>Bloodgroup</th>";    
    echo "<th>Date of Birth</th>";
    echo "<th>Delete</th>";
    echo "</tr>";

    while($row= mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['sname']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "<td>{$row['saddress']}</td>";
        echo "<td>{$row['pincode']}</td>";
        echo "<td>{$row['mobile']}</td>";
        echo "<td>{$row['spassword']}</td>";
        echo "<td>{$row['bloodgroup']}</td>";
        echo "<td>{$row['dob']}</td>";
        echo "<td> <a href='Update.php?updatedId={$row['id']}'> Update the Data </a> </td>";
        echo "</tr>";
    }    
    echo "</table>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update the Data</title>
    <style>
        h1{
            text-align:center;
            margin-top: 20px;
        }
        table{
            margin: 10px auto;
        }
        th{
            padding: 15px;
            background: #000;
            color: #fff;
        }
        td{
            padding: 10px;
            border-bottom: 1px solid #a7a7a7;
        }
        table a{
            border-color: pink;
            display: block;
            background: #009c00;
            color: #fff;
            border-radius: 20px;
            padding: 6px 10px;
	        text-decoration: none;
	        font-weight: 600;
        }
        table a:hover{
            background: #00ff00;
        }
        div a{
            display: block;
            margin: 20px auto;
            padding: 8px;
            text-align: center;
            width:150px;
            font-weight:800;
            font-size: 18px;
            background: #fff;
            color:#005a00;
            text-decoration: none;
            border-radius:20px;
        }
    </style>
</head>
<body>
</body>
</html>