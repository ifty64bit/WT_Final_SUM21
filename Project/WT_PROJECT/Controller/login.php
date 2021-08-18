<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require "$root/Project/WT_PROJECT/Model/db_config.php";
    session_start();
    $status="ok";
    if(isset($_POST['login']))
    {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
        }
        else{
            $status="e_v";
        }

        if($status=="ok")
        {
            $query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
            $result=get($query);
            if(count($result)>0)
            {
                $_SESSION['id']=$result[0]['id'];
                $_SESSION['uname']=$result[0]['username'];
                $_SESSION['status']=$result[0]['status'];
                header('Location: _home.php');
            }
            else{
                $status="w_u_p";
            }
        }
    }

    if(isset($_POST['login-admin']))
    {
        $type="";
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
        }
        else{
            $status="e_v";
        }

        if(empty($_POST['type']))
        {
            $status="e_v_t";
        }
        else{
            $type=$_POST['type'];
        }

        if($status=="ok")
        {
            if($type=="employee")
            {
                $query="SELECT * FROM emp WHERE username='$username' and password='$password'";
                $result=get($query);
                if(count($result)>0)
                {
                    $_SESSION['id']=$result[0]['id'];
                    $_SESSION['uname']=$result[0]['username'];
                    $_SESSION['level']="emp";
                    header('Location: index.php');
                }
                else{
                    $status="w_u_p";
                }
            }
            elseif($type=="admin")
            {
                $query="SELECT * FROM admin WHERE username='$username' and password='$password'";
                $result=get($query);
                if(count($result)>0)
                {
                    $_SESSION['id']=$result[0]['id'];
                    $_SESSION['uname']=$result[0]['username'];
                    $_SESSION['level']="admin";
                    header('Location: index.php');
                }
                else{
                    $status="w_u_p";
                }
            }
            
        }
        
    }
?>