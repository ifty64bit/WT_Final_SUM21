<?php
    include('./Model/db_config.php');
    $username="";
    $username_err="";
    $pass="";
    $pass_err="";
    $has_err=false;

    if(isset($_POST['login']))
    {
        if(empty($_POST['username']))
        {
            $has_err=true;
            $username_err="Field is Empty";
        }
        else{
            $username=$_POST['username'];
        }
        if(empty($_POST['pass']))
        {
            $has_err=true;
            $pass_err="Field is Empty";
        }
        else{
            $pass=$_POST['pass'];
        }
        if(!$has_err)
        {
            $query="SELECT * FROM admin WHERE username='$username' and password='$pass'";
            $result=get($query);
            if(count($result)>0)
            {
                setcookie('username',$username,time()+1000);
                header('Location: dashboard.php');
            }
            else{
                echo "Invalid Username or Password";
            }
        }
    }
?>