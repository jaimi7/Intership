<?php
    $name=$_POST['uname'];
    $email=$_POST['umail'];
    $age=$_POST['uage'];
    $password=$_POST['upswd'];
    $cpassword=$_POST['ucpswd'];


    if($password!==$cpassword)
        echo "<br><h1>Check Your Password !!!<br>Write Same Value of Password and Confirm Password..</h1><br><hr><br>";
    else{
        echo "<table border=2 cellpadding=20px>";
        echo "<tr><td>Name</td><td>$name</td></tr>";
        echo "<tr><td>E-mail</td><td>$email</td></tr>";
        echo "<tr><td>Age</td><td>$age</td></tr>";
        echo "<tr><td>Password</td><td>$password</td></tr>";
        echo "</table>";
    }
?>
