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
            $username_err="Field can not be empty";
        }
        else{
            $username=$_POST['username'];
        }
        if(empty($_POST['pass']))
        {
            $has_err=true;
            $pass_err="Field can not be empty";
        }
        else{
            $pass=$_POST['pass'];
        }

        if(!$has_err)
        {
            $query="SELECT * FROM users WHERE username='$username' and password='$pass'";
            $result=get($query);
            if(count($result)>0)
            {
                echo "logged in";
            }
            else{
                echo "Invalid Username or Password";
            }
        }
    }
?>