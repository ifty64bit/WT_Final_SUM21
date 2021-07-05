<?php 
    $u_name="";
    $u_name_error="";
    $pass="";
    $pass_error="";
    $hasError=false;

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
            foreach($users as $u=>$p)
            {
                if($u==$u_name && $p==$pass)
                {
                    #session_start();
                    #$_SESSION['loggeduser']=$u_name;
                    setcookie("loggeduser",$u_name,time()+120);
                    header("Location: dashboard.php");
                }
            }
            echo "Invalid Username";
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
</body>
</html>