<?php
    include('./Model/db_config.php');
    $username="";
    $username_err="";
    $pass1="";
    $pass1_err="";
    $pass2="";
    $pass2_err="";
    $email="";
    $email_err="";
    $phone="";
    $phone_err="";
    $has_err=false;

    if(isset($_POST['signup']))
    {
        if(empty($_POST['username']))
        {
            $has_err=true;
            $username_err="Fild can not be empty";
        }
        elseif(strlen($_POST['username'])<5)
        {
            $has_err=true;
            $username_err="Username must be greater then 5";
        }
        else{
            $username=$_POST['username'];
        }

        if(empty($_POST['pass1']))
        {
            $has_err=true;
            $pass1_err="Fild can not be empty";
        }
        elseif(strlen($_POST['pass1'])<6)
        {
            $has_err=true;
            $pass1_err="Password length must be greater then 6";
        }
        else
        {
            $pass1=$_POST['pass1'];
        }

        if(empty($_POST['pass2']))
        {
            $has_err=true;
            $pass2_err="Fild can not be empty";
        }
        elseif(strlen($_POST['pass2'])<6)
        {
            $has_err=true;
            $pass2_err="Password length must be greater then 6";
        }
        elseif($_POST['pass1']!=$_POST['pass2'])
        {
            $has_err=true;
            $pass2_err="Password does not match";
        }
        else
        {
            $pass2=$_POST['pass2'];
        }

        if(empty($_POST['phone']))
        {
            $has_err=true;
            $phone_err="Fild can not be empty";
        }
        elseif(!is_numeric($_POST['phone']))
        {
            $has_err=true;
            $phone_err="Fild must have numaric value";
        }
        else
        {
            $phone=$_POST['phone'];
        }

        if(empty($_POST['email']))
        {
            $has_err=true;
            $email_err="Fild can not be empty";
        }
        elseif(!strpos($_POST['email'],'@'))
        {
            $has_err=true;
            $email_err="Email must contain '@'";
        }
        elseif(!strpos($_POST['email'],'.'))
        {
            $has_err=true;
            $email_err="Email must contain '.'";
        }
        else
        {
            $email=$_POST['email'];
        }

        if(!$has_err)
        {
            echo "Signing up";
            $rs=inserUser($username,$pass2,$phone,$email);
            if($rs===true)
            {
                echo "success";
            }
            else{
                echo $rs;
            }
        }


    }
    function inserUser($username,$pass2,$phone,$email)
    {
        $querry="insert into users(username,password,phone,email) values('$username','$pass2','$phone','$email')";
        return execute($querry);
    }
?>