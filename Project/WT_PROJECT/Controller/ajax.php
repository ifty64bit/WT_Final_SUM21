<?php
    require '../Model/db_config.php';
    session_start();
    $emp=$_SESSION['uname'];
    if(isset($_GET['grant']))
    {
        if($_GET['grant']=='true')
        {   
            $acc_number=$_GET['acc'];
            $user=$_GET['user'];
            $id=$_GET['id'];
            $q="INSERT INTO cheque(issued_by, asso_acc, issued_for) VALUES('$emp', '$acc_number', '$user')";
            $res=execute($q);

            if($res==true)
            {
                $q="UPDATE message SET status='Granted' WHERE id='$id'";
                $res=execute($q);
                echo "pass";
            }
            else
            {
                echo trim($res);
            }
        }

        if($_GET['grant']=='false')
        {
            $user=$_GET['user'];
            $id=$_GET['id'];
            $q="UPDATE message SET status='Declined' WHERE id='$id'";
            $res=execute($q);
            if($res!=true)
            {
                echo $res;
            }
            else{
                echo "pass";
            }
        }
    }
    

    if(isset($_GET['grant_loan']))
    {
        if($_GET['grant_loan']=='true')
        {
            $acc_number=$_GET['acc'];
            $user=$_GET['user'];
            $id=$_GET['id'];
            $amount=$_GET['amount'];
            $q="INSERT INTO loan(type, issued_by, asso_acc,amount) VALUES('Personal', '$user', '$acc_number', '$amount')";
            $res=execute($q);

            if($res==true)
            {
                $q="UPDATE message SET status='Granted' WHERE id='$id'";
                $res=execute($q);
                echo "pass";
            }
            else
            {
                echo trim($res);
            }
        }

        if($_GET['grant_loan']=='false')
        {
            $user=$_GET['user'];
            $id=$_GET['id'];
            $q="UPDATE message SET status='Declined' WHERE id='$id'";
            $res=execute($q);
            if($res!=true)
            {
                echo $res;
            }
            else{
                echo "pass";
            }
        }
    }

    if(isset($_GET['updateEmp']))
    {
        $id=$_GET['id'];
        $username=$_GET['uname'];
        $f_name=$_GET['f_name'];
        $l_name=$_GET['l_name'];
        $salary=$_GET['salary'];
        $q="UPDATE emp SET username='$username', first_name='$f_name', last_name='$l_name', salary='$salary' where id='$id'";
        $res=execute($q);
        if($res==true)
        {
            echo "pass";
        }
        else{
            echo $res;
        }
    }
    
?>