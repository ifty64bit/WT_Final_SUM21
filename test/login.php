<?php 
    $u_name="";
    $u_name_error="";
    $pass="";
    $pass_error="";
    $hasError=false;

    $dbServerName="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="testdb";

    $conn=mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);

    $users=array("tanvir"=>"1234","ifty"=>"3456","karim"=>"789","rahim"=>"101112");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['uname']))
        {
            $hasError=true;
            $u_name_error="Username is Empty";
        }
        else
        {
            $u_name=$_POST['uname'];
        }
        if(empty($_POST['pass']))
        {
            $hasError=true;
            $u_name_error="Passwoerd is Empty";
        }
        else
        {
            $pass=$_POST['pass'];
        }

        if(!$hasError)
        {
            $querry="select * from user_info;";
            $result=mysqli_query($conn,$querry);
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['username']==$u_name)
                {
                    header("Location: dashboard.php");
                }
            }
            echo "Invalied";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="uname">
        <br>
        <input type="password" name="pass">
        <br>
        <input type="submit" value="Login">
    </form>
    <?php
        $querry="select * from user_info;";
        $result=mysqli_query($conn,$querry);
        while($row=mysqli_fetch_assoc($result))
        {
            echo $row["username"];
        }
    ?>
</body>
</html>