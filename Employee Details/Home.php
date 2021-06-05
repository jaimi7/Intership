<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee Details</title>
</head>
<body>
    <?php 
        include 'Header.php';
    ?>
    <h3>Employee Details</h3>
    <?php
        $connection=mysqli_connect("localhost","root","","db_employee") or die("Connection Failed.");
        $sql="SELECT * from tbl_employee";
        $query=mysqli_query($connection,$sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($query)>0){
    ?>
    <div class="record">
        <table>
            <tr class="head">
                <th>Employee ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Gender</th>
                <th>City</th>
                <th>Department</th>
                <th>Salary</th>
                <th colspan=2>Activity</th>
            </tr>
            <?php while($row=mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row['e_id'] ?></td>
                <td><?php echo $row['e_name'] ?></td>
                <td><?php echo $row['e_email'] ?></td>
                <td><?php echo $row['e_number'] ?></td>
                <td><?php echo $row['e_gender'] ?></td>
                <td><?php echo $row['e_city'] ?></td>
                <td><?php echo $row['e_department'] ?></td>
                <td><?php echo $row['e_salary'] ?></td>
                <th><a href="Inline Delete.php? <?php echo "deletedId={$row['e_id']}" ?>" class="delete">Delete</a></th>
                <th><a href="Inline Update.php? <?php echo "updateId={$row['e_id']}" ?>" class="update">Update</a></th>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        }else{
            echo"<h2>No Data Found !</h2>";
        }
        mysqli_close($connection);
    ?>
</body>
</html>