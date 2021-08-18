<?php
    require '../Model/db_config.php';
    session_start();
    $a_uname=$_SESSION['uname'];

    $t_ad=get("SELECT COUNT(id) from admin")[0]['COUNT(id)'];
    $t_emp=get("SELECT COUNT(id) from emp")[0]['COUNT(id)'];
    $t_u=get("SELECT COUNT(id) from `user` where status='active'")[0]['COUNT(id)'];
    $t_t=get("SELECT SUM(ammount) FROM `transaction`")[0]['SUM(ammount)'];

    if(isset($_POST["post_notice"]))
	{
        $hasError=false;
		if(empty($_POST["notice"]))
		{
	     $errorNotice="Enter notice";
		 $hasError=true;
		}
		else
		{
			$notice=htmlspecialchars($_POST["notice"]);
		}
		
		if($hasError == false)
		{
            $to=$_POST['to'];
            $q="INSERT INTO message(sender_name,sender_level,receiver,type,subject,message, status) VALUES('$a_uname', 'admin', '$to', 'notice', 'notice', '$notice','OK')";
            $res=execute($q);
            if($res==true)
            {
                $status='ok';
            }
		}
	}

    $type="";
    $type_err="";
    $username="";
    $username_err="";
    $f_name="";
    $f_name_err="";
    $l_name="";
    $l_name_err="";
    $password="";
    $password_err="";
    $salary="";
    $salary_err="";
    $has_err=false;
    
    if(isset($_POST['addbyadmin']))
    {
        
        
        if(empty($_POST['type']))
        {
            $has_err=true;
            $type_err="Select Type";
        }
        else{
            $type=$_POST['type'];
        }

        if(empty($_POST['username']))
        {
            $has_err=true;
            $username_err="Field is Empty";
        }
        else{
            $username=$_POST['username'];
        }

        if(empty($_POST['f_name']))
        {
            $has_err=true;
            $f_name_err="Field is Empty";
        }
        else{
            $f_name=$_POST['f_name'];
        }

        if(empty($_POST['l_name']))
        {
            $has_err=true;
            $l_name_err="Field is Empty";
        }
        else{
            $l_name=$_POST['l_name'];
        }

        if(empty($_POST['pass']))
        {
            $has_err=true;
            $password_err="Field is Empty";
        }
        else{
            $password=$_POST['pass'];
        }

        if(empty($_POST['salary']))
        {
            $has_err=true;
            $salary_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['salary']))
        {
            $has_err=true;
            $salary_err="Value must be numaric";
        }
        else{
            $salary=$_POST['salary'];
        }

        if(!$has_err)
        {
            $q="INSERT INTO $type(username,password,first_name,last_name,salary) VALUES('$username', '$password', '$f_name', '$l_name','$salary')";
            $res=execute($q);
            if($res==true)
            {
                $staus="ok";
                $type="";
                $username="";
                $f_name="";
                $l_name="";
                $password="";
                $salary="";
                $has_err=false;
            }
        }
    }
?>