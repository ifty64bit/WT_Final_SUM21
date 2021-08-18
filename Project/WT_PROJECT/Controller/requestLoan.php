<?php
    require('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $username=$_SESSION['uname'];
    $q="SELECT acc_number FROM account WHERE user_id='$id'";
    $acc_number=get($q)[0]['acc_number'];
    $q="SELECT * FROM loan WHERE asso_acc='$acc_number'";
    $res=get($q);
    $staus="";
    if(isset($_POST['apply']))
    {
        $q="INSERT INTO message(sender_name,sender_level,receiver,type,subject,message, status) VALUES('$username', 'user', 'emp', 'CHEQUE_REQUEST', 'CHEQUE REQUEST FROM $username', 'CHEQUE REQUEST FROM $username, ACCOUNT NUMBER: $acc_number', 'Pending')";
        $r=execute($q);
        if($r==true)
        {
            $staus="sent";
        }
    }

    if(isset($_POST['apply_loan']))
    {
        $amount="";
        $amount_err="";
        if(empty($_POST['amount']))
        {
            $amount_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['amount']))
        {
            $amount_err="Value Must Be Number";
        }
        else{
            $amount=$_POST['amount'];
        }
        if($amount_err=="")
        {
            $q="INSERT INTO message(sender_name,sender_level,receiver,type,subject,message, status) VALUES('$username', 'user', 'emp', 'LOAN_REQUEST', 'Amount $amount', 'Loan REQUEST FROM $username, ACCOUNT NUMBER: $acc_number', 'Pending')";
            $r=execute($q);
            if($r==true)
            {
                $staus="sent";
            }
        }
    }
?>