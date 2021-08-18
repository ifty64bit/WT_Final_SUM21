<?php

    include('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $sender=$_SESSION['uname'];

    $querry="SELECT tran_limit,acc_number,balance FROM account WHERE user_id='$id'";
    $res=get($querry)[0];
    $sender_acc=$res['acc_number'];
    $transc_limit=$res['tran_limit'];
    $balance=$res['balance'];
    $acc_name="";
    $acc_name_error="";
    $acc_number="";
    $acc_number_error="";
    $transc_amount="";
    $transc_amount_error="";
    $password="";
    $password_error="";
    $hasError=false;
    $status="ok";

    if(isset($_POST['transaction']))
    {
        if(empty($_POST['acc_name']))
        {
            $hasError=true;
            $acc_name_error="Field Can Not Be Empty";
        }
        else{
            $acc_name=$_POST['acc_name'];
        }

        if(empty($_POST['acc_number']))
        {
            $hasError=true;
            $acc_number_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['acc_number']))
        {
            $hasError=true;
            $acc_number_error="Account Number Must Be Numaric";
        }
        else{
            $acc_number=$_POST['acc_number'];
        }

        if(empty($_POST['transc_amount']))
        {
            $hasError=true;
            $transc_amount_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['transc_amount']))
        {
            $hasError=true;
            $transc_amount_error="This Field Must Be Numaric";
        }
        elseif((int)$_POST['transc_amount']>$transc_limit)
        {
            $hasError=true;
            $transc_amount_error="Transaction Limit exceeds";
        }
        elseif((int)$_POST['transc_amount']>$balance)
        {
            $hasError=true;
            $transc_amount_error="Transaction exceeds your balance";
        }
        else{
            $transc_amount=$_POST['transc_amount'];
        }

        if(empty($_POST['password']))
        {
            $hasError=true;
            $password_error="Field Can Not Be Empty";
        }
        else{
            $password=$_POST['password'];
        }

        if(!$hasError)
        {
            #Check If Password Match
            $querry="SELECT password FROM `user` WHERE id='$id'";
            $pass=get($querry)[0]['password'];
            if($pass!=$password)
            {
                $status="w_p";
            }

            #Check if username and account number match
            $querry="SELECT username FROM `user` INNER JOIN account ON `user`.id=account.user_id WHERE username='$acc_name' and acc_number='$acc_number'";
            $res=get($querry);
            if(!count($res)>0)
            {
                #print_r($res);
                $status="u_n_f";
            }

            #if all ok then send money
            if($status=="ok")
            {
                $balance=$balance-$transc_amount;
                $query="UPDATE account SET balance='$balance' WHERE id='$id'";
                $r1=execute($querry);
                $querry2="INSERT INTO transaction(t_from, t_from_acc, ammount, t_to, t_to_acc) VALUES('$sender', '$sender_acc', '$transc_amount', '$acc_name', '$acc_number')";
                $r2=execute($querry2);
                $querry3="SELECT balance from account where acc_number='$acc_number'";
                $r3=(int)get($querry3)[0]['balance'];
                $r3=$r3+$transc_amount;
                $querry4="UPDATE account SET balance='$r3' WHERE acc_number='$acc_number'";
                $r4=execute($querry4);
                if($r1 == true && $r2==true && $r4==true)
                {
                    $status="sent";
                }
            }
            $acc_name="";
            $acc_number="";
            $transc_amount="";
            $password="";
        }
    }
?>