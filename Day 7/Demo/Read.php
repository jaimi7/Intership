<?php
    $connection=mysqli_connect("localhost","root","","db_demo");
    $sql="SELECT * from tbl_user";
    $query=mysqli_query($connection,$sql);
    echo "<h1>Record</h1>";
    echo "<table border='1' cellpadding=15px>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "<th>Delete</th>";
    echo "</tr>";
    $i=0;
    while($row= mysqli_fetch_array($query)){
        $i++;
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>{$row['user_name']}</td>";
        echo "<td>{$row['user_email']}</td>";
        echo "<td>{$row['user_password']}</td>";
        echo "<td> <a href='Delete.php?deletedId={$row['user_id']}'> Delet the record </a> </td>";
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
    <title>Document</title>
    <style>
        div a{
            display: block;
            margin: 20px;
            padding: 8px;
            text-align: center;
            width:150px;
            font-weight:800;
            font-size: 18px;
            background: #bfbfbf;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div>
        <a href="Add.php">Add The Data</a>
    </div>
</body>
</html>