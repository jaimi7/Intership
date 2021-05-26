<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <style>
        body{
            text-align: center;
            background: #bdbdbd;
        }
        form{
            border: 3px solid #00d7fd;
            border-radius: 20px;
            box-shadow: 1px 1px 10px 1px #000;
            width: 500px;
            margin: 20px auto;
            background: #00d7fd;
        }
        table{
            margin: 20px;
        }
        table td{
            padding: 10px;
            font-weight: 500;
        }
        input{
            padding: 10px;
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>Log In</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" placeholder="Enter User Name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="" placeholder="Enter Password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="Submit"></td>
            </tr>
        </table>
    </form><br>
    <?php
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pswd=$_POST['password'];
        if($user=="admin" && $pswd=="admin")
            echo("User Name And Password Is Matched.");
        else
            echo("Error ! Please Enter Correct Data !");
    }
?>
</body>
</html>